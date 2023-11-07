<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Creativeitem Software Installation" />
	<meta name="author" content="Creativeitem" />

	<title>Installation | Academy-LMS</title>
    
    <script src="{{ url('assets/backend/js/app.min.js'); }}"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="shortcut icon" href="{{ url('assets/images/system/favicon.png');}}">
    <!-- third party css -->
    <link href="{{ url('assets/backend/css/vendor/jquery-jvectormap-1.2.2.css');}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/backend/css/vendor/dataTables.bootstrap4.css');}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/backend/css/vendor/responsive.bootstrap4.css');}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/backend/css/vendor/buttons.bootstrap4.css');}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/backend/css/vendor/select.bootstrap4.css');}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    <!-- App css -->
    <link href="{{ url('assets/backend/css/icons.min.css'); }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>
<body class="page-body">

<div class="page-container horizontal-menu">
	<header class="navbar navbar-fixed-top" style="min-height: 80px; background: linear-gradient(135deg,#0F2027 0,#2C5364 60%) !important;">
		<div class="navbar-inner">
			<!-- logo -->
			<div class="navbar-brand">
				<a href="#">
					<img src="{{ url('assets/images/system/logo-light.png'); }}"  style="max-height:40px;"/>
				</a>
			</div>
	    	<div class="navbar-brand pull-right" style="margin-top: 13px;">
	        	Installation
	      	</div>
		</div>
	</header>

	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    @yield('main_page')
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
                    <footer class="main"
                        style="text-align: center;">
                        Need help?  <a href="http://support.creativeitem.com" target="_blank" style="text-decoration:underline;">Contact support</a>
                    </footer>
				</div>
			</div>
		</div>
	</div>

    <!-- Bottom Scripts -->
    <script src="{{ url('assets/js/gsap/main-gsap.js'); }}"></script>
    <script src="{{ url('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js'); }}"></script>
    <script src="{{ url('assets/js/bootstrap.js'); }}"></script>
    <script src="{{ url('assets/js/joinable.js'); }}"></script>
    <script src="{{ url('assets/js/resizeable.js'); }}"></script>
    <script src="{{ url('assets/js/neon-api.js'); }}"></script>
    <script src="{{ url('assets/js/neon-custom.js'); }}"></script>
    <script src="{{ url('assets/js/neon-demo.js'); }}"></script>
</body>
</html>
