
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">
	<title>uProject</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('css/app.css')}}" rel="stylesheet">
</head>
<body>
	<div id="app">
	<div class="container-fluid" id="wrapper">
		<div class="row">
			@include('layouts.admin-nav')
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				@include('layouts.admin-header')	
				@yield('content')			
			</main>
		</div>
	</div>
	</div>
    <!--  JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script href="{{url('js/app.js')}}"></script>
	</body>
</html>
