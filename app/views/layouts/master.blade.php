<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Servisini | @yield('title')</title>

<link href="{{ asset('packages/csskit/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('packages/csskit/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset ('packages/csskit/css/styles.css')}}" rel="stylesheet">
<link href="{{ asset('packages/uikit/css/uikit.almost-flat.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css')}}" />
<script src="{{ asset('components/jquery/jquery.min.js')}}"> </script>
<script src="{{ asset('packages/uikit/js/uikit.min.js')}}"> </script>
<script src="{{asset ('packages/csskit/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset ('packages/csskit/js/bootstrap.min.js')}}"></script>
@yield('asset')

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>SERVIS</span>SINI </a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Sentry::getUser()->first_name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{URL::to('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class=""><a href="{{URL::to('dashboard')}}"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
            <li class=""><a href="{{URL::to('admin/services')}}"><span class="glyphicon glyphicon-home"></span> Tempat Servis Motor</a></li>
            <li class=""><a href="{{URL::to('admin/review')}}"><span class="glyphicon glyphicon-home"></span> Review</a></li>
            <li class=""><a href="#"><span class="glyphicon glyphicon-home"></span> Rekomendasi</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
	</div><!--/.sidebar-->
    
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">@yield('breadcrumb')</li>
			</ol>
                <h1 class="uk-heading-large">@yield('title')</h1>
                @yield('title-button')
		</div><!--/.row-->
            @yield('content')
    </div>
</body>

</html>
