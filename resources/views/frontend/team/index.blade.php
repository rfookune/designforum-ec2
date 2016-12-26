@extends('layouts.frontend')

@section('styles')
	<style>
		.hero {
			background: url('http://themes.iki-bir.com/hygge/style/images/art/slider-bg1.jpg');
			background-size: cover;
    		background-position: center;
		}
	</style>
@endsection


@section('header')
	@include('frontend.team.includes.header')
@endsection

@section('content')
	
	@include('frontend.team.includes.intro')

	@include('frontend.team.includes.team')

@endsection


@section('scripts')

@endsection
