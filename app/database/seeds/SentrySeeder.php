<?php

class SentrySeeder extends Seeder {
    public function run () {
        DB::table('users_groups')->delete();
        DB::table('groups')->delete();
        DB::table('users')->delete();
        DB::table('throttle')->delete();
        
        try {
            $group = Sentry::createGroup(array(
            'name'          => 'admin',
            'permissions'   => array (
                'admin' => 1,
            ),
            ));
        }
        catch (Cartalyst\Sentry\Groups\NameRequiredException $e) {
            echo 'Name field is required';
        }
        catch (Cartalyst\Sentry\Groups\GroupExistsException $e) {
            echo 'Group already exists';
        }
        
        try {
            $admin = Sentry::register (array(
            'email'         => 'servis.sini@gmail.com',
            'password'      => 'admin',
            'first_name'    => 'Admin',
            'last_name'     => 'Servisini'
            ), true);
            
            $adminGroup = Sentry::findGroupByName('admin');
            $admin->addGroup($adminGroup);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
            echo 'Login field is required';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
            echo 'Password field is required';
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e) {
            echo 'User with this login already exists';
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e) {
            echo 'Group was not found';
        }
    }
}