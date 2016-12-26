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
	@include('frontend.portfolio.includes.header')
@endsection

@section('content')
	
	@include('frontend.portfolio.includes.intro')

	@include('frontend.portfolio.includes.gallery')

	@include('frontend.partials.contact-nav', [ 'section_class' => 'section--dark'])
	
@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
	<script>
		$(function () {
			var filterList = {	
				init: function () {
					$('#portfoliolist').mixItUp({
		  				selectors: {
		    			  	target: '.portfolio',
		    			  	filter: '.filter'	
		    		  	},
	    		  		load: {
	      		  			filter: '.office, .private, .residential, .public'
	      				}     
					});
				}
			};
			
			filterList.init();
		});
	</script>
@endsection