@extends('layouts.frontend')

@section('styles')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
	
	<style>

		.grid-split-2 .grid-item {
			margin-top: 30px;
		}

		.grid-split-2 .grid-header {
			text-transform: uppercase;
		}

		.grid-split-2 .grid-header .title h2 {
		    margin-top: 25px;
			margin-bottom: 25px;
			font-weight: 700;
    		font-size: 2.5em;
		}

		.grid-split-2 .grid-header .title h4 {
		    margin: 0;
		}

		.owl-theme .owl-controls{
			margin-top: 10px;
			text-align: center;
		}
	
	</style>
@endsection

@section('header')
	@include('frontend.project.includes.header')
@endsection

@section('content')

	<div class="section section--light">
		<div class="main container no-top-padding">
			<div class="row">
				<div class="col-md-7">
					<div class="content">
						<div class="slider">
							<div class="owl-carousel" id="carousel">
								<div class="carousel-item"><img src="http://justinredman.com/wp-content/uploads/2016/08/sticky-notes-work.jpg"></div>
								<div class="carousel-item"><img src="http://justinredman.com/wp-content/uploads/2015/08/977006_10101501137456410_653629184_o.jpg"></div>
								<div class="carousel-item"><img src="http://justinredman.com/wp-content/uploads/2016/09/Karissa-62.jpg"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="content project-content">
						<div class="tag-wrapper">
							<p><span class="mdi mdi-tag-outline"></span> Category 1</p>
						</div>
						<div class="detail">
							<p><b>Client: </b> Lorem Ipsum</p>
							<p><b>Date: </b> 07/07/2012</p>
							<p><b>Location: </b> Moka, Mauritius</p>
							<p><b>Info: </b> Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
						<div class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut eius consectetur optio quaerat nesciunt. Quod labore possimus iusto rem, quam tempora quos dolorum earum delectus at, facilis reprehenderit eos exercitationem.</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@include('frontend.partials.contact-nav', [ 'section_class' => 'section--dark'])

@endsection

@section('scripts')
	<!-- LIGHTBOX ON IMAGE CLICK -->
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
	
	<script>

		$(document).ready(function() {

			$('#hero').parallax({imageSrc: '/img/test/StockSnap_42H3JH8QI5.jpg'});
		 	carousel();

		});

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