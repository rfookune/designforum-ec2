@extends('layouts.frontend')

@section('styles')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
	
	<style>
		.section.section-carousel  {
			/*background: url('/img/test/StockSnap_YFHE4V3QVO.jpg');*/
			/*background: url("http://template.brainwave.scientecraft.com/img/content/testimonial.jpg?v=1.0.0");*/
    		background-size: cover;
    		background-position: center;
    		background-repeat: no-repeat;
		}

		.img-bottom {
			position: relative;

		}

		.img-bottom img {
			display: block;
			margin: 0 auto;
			position: relative;
			top: -50px;
			height: 500px;
		}
	</style>
@endsection


@section('header')
	@include('frontend.home.includes.header')
@endsection

@section('content')

<div class="section section--light">
	<div class="container main no-top-padding">
		<div class="text-center">
			<div class="sec-heading">
				<h2>Welcome to Design Forum</h2>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="sec-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="img-bottom">
		<img src="http://www.octarinethemes.com/demos/definity/assets/images/ipad-cover-red.png" alt="">
	</div>
</div>

@include('frontend.home.includes.workflow')

@include('frontend.home.includes.carousel')

<div class="section section--light">
	<div class="container main">
		<div class="content content--split-2">
			<div class="row">
				<div class="col-md-7 col-sm-10 col-sm-offset-1 col-md-offset-0 col-vcenter">
					<div class="text-wrapper text-center-md">
						<h4 class="title">Visit an interior before it's built</h4>
						<hr class="hr hr-short">
						<p>
							Static renders limit the viewer to a few selected view points, which makes it difficult to fully imagine a space and evaluate its functionality and atmosphere. With Shapespark you can overcome these limitations by allowing the viewer to enter a space and freely walk around to examine every detail.
						</p>
					</div>
				</div>
				<div class="col-md-5 visible-md visible-lg col-vcenter">
					<div class="img-wrapper">
						<i class="flaticon flaticon-construction-drawing"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="content content--split-2">
			<div class="row">
				<div class="col-md-5 visible-md visible-lg col-vcenter">
					<div class="img-wrapper">
						<i class="flaticon flaticon-construction-loader"></i>
					</div>
				</div>
				<div class="col-md-7 col-sm-10 col-sm-offset-1 col-md-offset-0 col-vcenter">
					<div class="text-wrapper text-center-md">
						<h4 class="title">Explore on the Web</h4>
						<hr class="hr hr-short">
						<p>
							To present the 3D content Shapespark uses WebGL, an open web technology that is supported by default by modern browsers and operating systems. Everyone can explore your visualizations directly in the browser, no plugins are required.
						</p>
					</div>		
				</div>
			</div>
		</div>

		<div class="content content--split-2">
			<div class="row">
				<div class="col-md-7 col-sm-10 col-sm-offset-1 col-md-offset-0 col-vcenter">
					<div class="text-wrapper text-center-md">
						<h4 class="title">3D modeling software integration</h4>
						<hr class="hr hr-short">
						<p>
							There's no need to change your familiar workflow, Shapespark works with existing modeling tools and uses traditional rendering concepts such as materials and light sources. Shapespark comes with a SketchUp extension for exporting models. 3ds Max models can be imported via the COLLADA format. Other tools are not yet officially supported, but models from them can be imported via the COLLADA, OBJ or FBX formats.
						</p>
					</div>
				</div>
				<div class="col-md-5 visible-md visible-lg col-vcenter">
					<div class="img-wrapper">
						<i class="flaticon flaticon-construction-paint-roller"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts')
	<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#hero').parallax({imageSrc: '/img/test/StockSnap_42H3JH8QI5.jpg'});
			$('#parallax-carousel').parallax({imageSrc: '/img/test/macbook-926425.jpg'});
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
