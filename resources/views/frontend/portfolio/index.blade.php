@extends('layouts.frontend')

@section('styles')
	<style>
		.filter-list {
			padding:0;
			list-style:none;
			display: inline-block;
		}

		.filter-header {
			text-transform: uppercase;
			font-weight: 700;
		    font-size: 1.15em;
		}

		.filter-list li {
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.filter-list li span {
			display: block;
			text-decoration: none;
			cursor: pointer;
		}

		.filter-list li span:hover {
			color: #1d107a;
			font-weight: 700;
		}

		.filter-list li span.active {
			color: #1d107a;
			font-weight: 700;
		}
		
		
		.portfolio-list {
			overflow: hidden;
		}
		
		.portfolio-list .portfolio {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			display:none;
			overflow:hidden;
			margin-bottom: 100px;
		}

		.portfolio--date {
			float: left;
		    width: 90px;
		    margin-right: 20px;
		    border-right: solid 1px #ddd;
		}

		.portfolio--wrapper {
			padding-left: 110px;
		}

		.portfolio--image img {
			position: relative;
			max-width: 100%;
		}

		.portfolio--date .month {
			display: block;
		    font-size: 17px;
		    text-align: center;
		    text-transform: uppercase;
		    margin-bottom: 4px;
		    font-weight: 600;
		}
		
		.portfolio--date .day {
		    display: block;
		    font-size: 30px;
		    line-height: 15px;
		    text-align: center;
		    font-weight: 700;
		    margin-bottom: 9px;
		    text-transform: uppercase;
    	}

		.portfolio--date .year {
			display: block;
		    font-size: 17px;
		    text-align: center;
		    text-transform: uppercase;
		    font-weight: 600;
		}

		.portfolio--content .title h2, .portfolio--content .title h3 {
			margin-bottom: 5px;
			font-family: 'Roboto', sans-serif;
			font-weight: 100;
			font-size: 2.4em;
		}

		.portfolio--content .subtitle {
			font-size: 0.8em;
		}

		.portfolio--content .description {
			margin-bottom: 20px;
		}

		@media (min-width: 992px) {
			.filter--wrapper {
				float: right;
			}
		}

		@media (max-width: 992px) {
			.filter--wrapper {
				text-align: center;
			}
			.filter-list li {
				float: left;
				padding: 0 20px;
			}

		}

		@media (max-width: 500px) {
			.filter-list li {
				float: none;
			}
		}
	
	</style>
@endsection

@section('header')
	@include('frontend.portfolio.includes.header')
@endsection

@section('content')

<div class="section section--light" id="anchor--learn-more">
	<div class="container main no-top-padding">
		@include('frontend.partials.gallery2')
	</div>
</div>

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