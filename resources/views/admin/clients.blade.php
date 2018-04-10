@extends('layouts.admin')

@section('page_title', 'Site Admin:Clients')
@section('admin', 'active')

@section('content')
<a class="bread-crumbs" href="{{route('admin')}}">Back to home</a>
	<div class="content">
		 <ClientForm></ClientForm>
	</div>
@endsection
