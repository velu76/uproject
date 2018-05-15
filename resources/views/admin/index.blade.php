@extends('layouts.admin')

@section('page_title', 'Site Admin')
@section('admin', 'active')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col">				
				<a href="{{route('admin_clients')}}" class="btn btn-primary">Clients</a>	
				<br><br>			
				<a href="#" class="btn btn-primary">Consortiums</a>	
				<br><br>
				<a href="#" class="btn btn-primary">Partnerships</a>
			</div>

			<div class="col">
				<a href="{{route('admin_sources')}}" class="btn btn-primary">Sources</a>	
			</div>

			<div class="col">				
				<a href="#" class="btn btn-primary">Partnerships</a>
			</div>
		</div>
	</div>
@endsection