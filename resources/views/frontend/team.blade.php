@extends('layouts.frontend')

@section('styles')
	<style>

	</style>
@endsection

@section('header')
	<div class="hero">
		<div class="header">
			<div class="header-logo">
				<img src="/img/logo/logo.png" alt="">
			</div>
			<div class="header-content">
				<h1 class="headline">Our Team</h1>
			    <p class="sub-headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptate repellat error aliquam molestiae commodi iure beatae eveniet.</p>
			</div>
		</div>
	</div>
@endsection

@section('content')

<div class="section section--dark team-page">
	<div class="container main">
		<!-- <div class="header text-center" style="margin-bottom: 100px;">
			<h1>Senior Architects</h1>
			<hr class="hr hr-primary divider-lg divider-dark">
		</div> -->
		<div class="team-grid">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 col-lg-offset-2">
					<div class="member">
						<div class="member--inner">
							<div class="member--avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src2="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg"></div>
       						<div class="member--name">Marc Foo Kune</div>
        					<div class="member--title">CEO &amp; Founder</div>
        					<div class="member--footer"><a href="#" class="member--open">Read More <span class="mdi mdi-arrow-right"></span></a></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="member">
						<div class="member--inner">
							<div class="member--avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src2="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg"></div>
							<div class="member--name">Nirupa Rughoo</div>
        					<div class="member--title">Senior Architect</div>
        					<div class="member--footer"><a href="#" class="member--open">Read More <span class="mdi mdi-arrow-right"></span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section--divider"></div>

<div class="section section--dark team-page">
	<div class="container main">
		<!-- <div class="header text-center" style="margin-bottom: 100px;">
			<h1>Designers</h1>
			<hr class="hr hr-primary divider-lg divider-dark">
		</div> -->
		<div class="team-grid">
			<div class="row">
				<div class="col-md-4">
					<div class="member">
						<div class="member--inner">
							<div class="member--avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src2="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg"></div>
       						<div class="member--name">Gaurav Rughoo</div>
        					<div class="member--title">Assistant Architect</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="member">
						<div class="member--inner">
							<div class="member--avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src2="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg"></div>
							<div class="member--name">Yudish Shegobin</div>
        					<div class="member--title">Assistant Architect</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="member">
						<div class="member--inner">
							<div class="member--avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg" data-src2="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg"></div>
							<div class="member--name">Kavi Khushiram</div>
        					<div class="member--title">Assistant Architect</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="member-overlay m-overlay-split">
	<div class="m-overlay--close"><a href="#" class="member--close"><span class="mdi mdi-close"></span></a></div>
	<div class="m-overlay-wrapper m-overlay-centered">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
					<div class="m-overlay--inner">
						<div class="m-overlay--avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg"></div>
						<div class="m-overlay--header">
							<div class="name">
								Aaron Rossi
							</div>
							<div class="title">
								CEO &amp; Co-Founder
							</div>
						</div>
						<div class="m-overlay--bio">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0 m-overlay--question-wrapper">
					<div class="m-overlay--inner">
						<div class="m-overlay--question">
							<div class="m-overlay--q">
								<p><span class="quote">&ldquo;</span><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</b></p>
							</div>
							<div class="m-overlay--a">
								<p>Saepe cum cumque corrupti vitae, blanditiis quia adipisci perspiciatis libero! Magnam, fugit. Temporibus earum, nostrum nemo iste nesciunt dolore! Accusantium, odit, exercitationem.</p>
							</div>
						</div>
						<div class="m-overlay--question">
							<div class="m-overlay--q">
								<p><span class="quote">&ldquo;</span><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</b></p>
							</div>
							<div class="m-overlay--a">
								<p>Saepe cum cumque corrupti vitae, blanditiis quia adipisci perspiciatis libero! Magnam, fugit. Temporibus earum, nostrum nemo iste nesciunt dolore! Accusantium, odit, exercitationem.</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

@endsection

@section('scripts')
	<script>

		$('.member .member--open').click(function(event) {
			event.preventDefault();
			$('.member-overlay').fadeIn();
			memberOverlayCentered();
			$('body').addClass('no-scroll');
		});

		$('.member-overlay .member--close').click(function(event) {
			event.preventDefault();
			$(this).closest('.member-overlay').fadeOut();
			$('body').removeClass('no-scroll');
		});

		$(window).resize(function(event) {
			memberOverlayCentered();
		});

		$('#js-contact--clear').on('click', function(event){
			event.preventDefault();
			$('.contact--form .form-group input').val('');
			$('.contact--form .form-group textarea').val('');
		});

		function memberOverlayCentered() {
			$('.member-overlay').each( function(){
				var $container = $(this);
				var $wrapper = $container.find('.m-overlay-wrapper');
				var current_height = $wrapper.outerHeight();
				var winddow_height = $(window).height();
				if (current_height > 0 && current_height < winddow_height) {
					$wrapper.addClass('m-overlay-centered');
				} else {
					$wrapper.removeClass('m-overlay-centered');
				}
			});
		}
	</script>
@endsection