@extends('bootstrap.layouts.layout')

@section('navbar')
	@parent
@endsection

@section('header')
	@parent
@endsection

@section('sidebar')
	@parent

	<div class="sidebar-module">
		<h4>About</h4>
		<p>This is a template for a <em>simple marketing</em> or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
	</div>
@endsection

@section('content')
	@include('bootstrap.content')          
@endsection