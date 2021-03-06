@extends('layouts.frontend')

@section('styles')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
	
	<style>
		.hero {
			background: url('http://themes.iki-bir.com/hygge/style/images/art/slider-bg1.jpg');
			background-size: cover;
    		background-position: center;
		}

		.section-carousel {
			background: url(/img/test/office-1078869.jpg);
			background-size: cover;
    		background-position: center;
		}

		.img-bottom {
			position: relative;
			padding-bottom: 50px;
		}

		.img-bottom img {
			display: block;
			margin: 0 auto;
			position: relative;
			top: -30px;
			height: 350px;
		}
	</style>
@endsection


@section('header')
	@include('frontend.home.includes.header')
@endsection

@section('content')
	
	@include('frontend.home.includes.intro')

	@include('frontend.home.includes.workflow')

	@include('frontend.home.includes.carousel')

	@include('frontend.home.includes.why-us')
	
	@include('frontend.partials.contact-nav')

@endsection


@section('scripts')
	<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			// $('#hero').parallax({imageSrc: '/img/test/StockSnap_42H3JH8QI5.jpg'});
			// $('#parallax-carousel').parallax({imageSrc: '/img/test/office-1078869.jpg'});
			// $('#parallax-carousel').parallax({imageSrc: 'http://template.brainwave.scientecraft.com/img/content/testimonial.jpg?v=1.0.0'});

			$('.carousel-image').hover(
				function(){
					$(this).find('.icon-dwnld').fadeIn();
				},
				function(){
					$(this).find('.icon-dwnld').fadeOut();
				}
			);
			carousel();
		});


	/* ------------------------------------
	 * Post carousel START
	 -------------------------------------*/
	function carousel() {

		responsive = {
			0: {
				items: 1,
			},
			480: {
				items: 1,
			},
			768: {
				items: 1,
			}
		};

		$('#carousel').owlCarousel({
			navText: ['<i class="mdi mdi-chevron-left"></i>', '<i class="mdi mdi-chevron-right"></i>'],
			lazyLoad: true,
			mouseDrag: false,
			nav: true,
			dots: true,
			loop: true,
			margin: 0,
			items: 1,
			// animateIn: 'fadeIn',
			// animateOut: 'fadeOut',
			responsiveClass: true,
			// responsive: responsive
		});
	}
	</script>
@endsection
