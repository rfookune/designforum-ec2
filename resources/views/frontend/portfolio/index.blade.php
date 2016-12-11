@extends('layouts.frontend')

@section('header')
	@include('frontend.portfolio.includes.header')
@endsection

@section('content')

	@include('frontend.portfolio.includes.gallery')

	@include('frontend.partials.contact-nav', [ 'section_class' => 'section--dark'])
	
@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#hero').parallax({imageSrc: '/img/test/StockSnap_42H3JH8QI5.jpg'});
		});

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