<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Servisini | @yield('title')</title>

<link href="{{ asset('packages/csskit/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('packages/uikit/css/uikit.css')}}" rel="stylesheet">
<script src="{{ asset('components/jquery/jquery.min.js')}}" > </script>

</head>

<body>		
     <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >        
                @include('layouts.partials.alert')
                @yield('content')
            </div>
        </div>
    </div>
	<script src="{{asset ('packages/csskit/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset ('packages/csskit/js/bootstrap.min.js')}}"></script>
</body>

</html>
