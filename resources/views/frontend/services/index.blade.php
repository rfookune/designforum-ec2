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
	@include('frontend.services.includes.header')
@endsection

@section('content')
	<div class="section section--light" id="anchor--learn-more">
		@include('frontend.services.includes.intro')
		@include('frontend.services.includes.services')
	</div>

@endsection


@section('scripts')

@endsection
