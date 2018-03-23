<header class="page-header row justify-center">
	<div class="col-md-6 col-lg-8" >
		<h1 class="float-left text-center text-md-left">@yield('page_title')</h1>
	</div>
	<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<img src="{{url('imgs/profile.jpg')}}" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
		<div class="username mt-1">
			<h4 class="mb-1">Username</h4>
			<h6 class="text-muted">Super Admin</h6>
		</div>
	</a>
	<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
		<a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
		<a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
	</div>
	<div class="clear"></div>
</header>