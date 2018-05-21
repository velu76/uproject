@extends('layouts.admin')

@section('page_title', 'Site Admin:Sources')
@section('admin', 'active')

@section('content')
<a class="bread-crumbs" href="{{route('admin')}}">Back to home</a>
	<div class="content">	
		 <SourceIndex tdata="{{$srcs->toJson()}}"></SourceIndex>	
		 {{ $srcs->links()}}
	</div>
@endsection
