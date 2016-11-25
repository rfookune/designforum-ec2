@extends('layouts.frontend')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
	
	<style>
		.slider-panel img {
			height: 300px;
			margin: 0 auto;
			position: relative;
		}

		.center{
		  	padding: 60px 0px;
		  	text-align:center;
		}
		.slick-center {
		  	transform: scale(1.25, 1.25);
		  	transition: ease-in-out all .15s ease;
		  	z-index: 2;
		 	// overflow:hidden;
		  	color:white;
		  	opacity:1;
		}
		.slick-list {
		  	overflow: visible; 
		}
		.slick-wrapper {
			overflow:hidden;
		}

		.slick-dots li button:before, .slick-dots li.slick-active button:before {
			color: #fff;
		}

	</style>
@endsection


@section('header')
	<div class="hero">
		<div class="header">
			<div class="header-logo">
				<img src="/img/logo/logo.png" alt="">
			</div>
			<div class="header-content">
				<h1 class="headline">Design Forum</h1>
			    <p class="sub-headline">Lorem ipsum dolor sit amet.</p>
			    <div class="btn-wrapper">
			    	<a href="/" class="btn btn-color">Learn More</a>
			    	<a href="/" class="btn btn-color">Portfolio</a>
			    </div>
			    
			</div>
		</div>
	</div>
@endsection

@section('content')

<div class="section section--dark">
	<div class="container main">
		<div class="content text-center">
			<div class="row row--flex row--flex-md">
				<div class="col-md-4 col--flex col--flex-md">
					<div class="tile--wrapper">
						<div class="tile--icon">
							<i class="flaticon flaticon-construction-light-bulb-1"></i>
						</div>
						<div class="tile--text">
							<p class="title">Concept</p>
							<p class="detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, amet alias adipisci qui, magni ipsam assumenda voluptas.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col--flex col--flex-md">
					<div class="tile--wrapper">
						<div class="tile--icon">
							<i class="flaticon flaticon-construction-drawing"></i>
						</div>
						<div class="tile--text">
							<p class="title">Design</p>
							<p class="detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col--flex col--flex-md">
					<div class="tile--wrapper">
						<div class="tile--icon">
							<i class="flaticon flaticon-construction-helmet"></i>
						</div>
						<div class="tile--text">
							<p class="title">Build</p>
							<p class="detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>

<div class="section section--divider">
	<div class="slick-wrapper">	
		<div class="slider center">
		  	<div class="slider-panel">
				<a href="/img/certificate/certificate_1.jpg" target="_blank"><img src="/img/certificate/certificate_1.jpg" align="center"></a>
		  	</div>
		  	<div class="slider-panel">
				<a href="/img/certificate/certificate_2.jpg" target="_blank"><img src="/img/certificate/certificate_2.jpg" align="center"></a>
		  	</div>
		  	<div class="slider-panel">
				<a href="/img/certificate/certificate_3.jpg" target="_blank"><img src="/img/certificate/certificate_3.jpg" align="center"></a>
		  	</div>
		  	<div class="slider-panel">
				<a href="/img/certificate/certificate_1.jpg" target="_blank"><img src="/img/certificate/certificate_1.jpg" align="center"></a>
		  	</div>
		  	<div class="slider-panel">
				<a href="/img/certificate/certificate_2.jpg" target="_blank"><img src="/img/certificate/certificate_2.jpg" align="center"></a>
		  	</div>
		  	<div class="slider-panel">
				<a href="/img/certificate/certificate_3.jpg" target="_blank"><img src="/img/certificate/certificate_3.jpg" align="center"></a>
		  	</div>
		</div>
	</div>
</div>

<div class="section section--light">
	<div class="container main">
		<div class="content content--split-2">
			<div class="row">
				<div class="col-md-7 col-vcenter">
					<div class="text-wrapper">
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
				<div class="col-md-7 col-vcenter">
					<div class="text-wrapper text-right-md">
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
				<div class="col-md-7 col-vcenter">
					<div class="text-wrapper">
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
	<script>
		$(document).ready(function(){

			$('.slick-slider').slick({
			  centerMode: true,
			  centerPadding: '60px',
			  slidesToShow: 3,
			  responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 3
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '40px',
			        slidesToShow: 1
			      }
			    }
			  ]
			});

			$('.center').slick({
	 			dots:true,
				adaptiveHeight: true,
				infinte:true,
				centerMode:true,
	  			centerPadding: '60px',
				draggable: true,
    			accessibility: true,
    			focusOnSelect:true,
			    // variableWidth: true,
			    slidesToShow: 3,
			    slidesToScroll:1,
			    responsive: [{
			      	breakpoint: 1024,
			      	settings: {
			        	slidesToShow: 3,
			        	slidesToScroll: 3,
			        	infinite: true,
			        	dots: true
			      	}
			    },
			    {
			      	breakpoint: 600,
			      	settings: {
			        	slidesToShow: 3,
			        	slidesToScroll: 1
			      	}
			    },
			    {
			      	breakpoint: 480,
			      	settings: {
			        	slidesToShow: 1,
			        	slidesToScroll: 1
			      	}
			    }
			  	],
				autoplay: true			
			});

		});
	</script>
@endsection
