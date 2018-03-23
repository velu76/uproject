<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
	<h1 class="site-title"><a href="{{url('/')}}"><em class="fa fa-paper-plane-o"></em> uProject</a></h1>
	
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
	<ul class="nav nav-pills flex-column sidebar-nav">
		<li class="nav-item">
			<a class="nav-link @yield('dashboard')" href="{{url('/')}}">
				<em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link @yield('bids')" href="{{route('bids')}}"><em class="fa fa-hand-o-up"></em>Bids
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="widgets.html"><em class="fa fa-calendar-o"></em>EOI
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="charts.html"><em class="fa fa-bar-chart"></em> Proposals
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="forms.html"><em class="fa fa-map"></em>Projects
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="tables.html"><em class="fa fa-search-plus"></em>Advance Search</a>
		</li>
		
	</ul>
	<a href="login.html" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
</nav>