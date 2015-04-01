@extends('layouts.guest')

@section('title')
Login
@stop

@section('content')
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        {{Form::open(array('url' => '/authenticate', 'class' => 'form-horizontal'))}}
                        
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        {{Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'email')) }}
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        {{Form::password('password', array('class' => 'form-control', 'placeholder' => 'password')) }}
                            </div>
                                
                            <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">
                                        {{Form::submit('Login', array('class' => 'btn btn-success')) }}                                                                     </div>
                            </div>
                                        {{Form::close()}}
                    </div>                     
@stop