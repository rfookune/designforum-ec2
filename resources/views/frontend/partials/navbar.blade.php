<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->

		<div class="navbar-header">
			<a href="#" class="sidebar-toggle">
				<div class="toggle-btn-group">
					<span class="mdi mdi-menu"></span>
					<span class="mdi mdi-close"></span>
				</div>
			</a>
			<a class="navbar-brand brand-color" href="/">
				<img src="/img/logo/logo.png" alt="Design Forum">
			</a>
			<a class="navbar-brand brand-white" href="/">
				<img src="/img/logo/logo_white.png" alt="Design Forum">
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="{{Request::is('/') ? 'active' : ''}}"><a class="animsition-link" href="/">Home</a></li>
				<li class="{{Request::is('portfolio') ? 'active' : ''}}"><a class="animsition-link" href="/portfolio">Portfolio</a></li>
				<li class="{{Request::is('team') ? 'active' : ''}}"><a class="animsition-link" href="/team">Our Team</a></li>
				<li class="{{Request::is('faq') ? 'active' : ''}}"><a class="animsition-link" href="/faq">FAQ</a></li>
				<li style="display: none;"><a class="animsition-link" id="nav--link-contact" href="/contact">FAQ</a></li>
				<li class="contact-link"><button class="animsition-link btn btn-transparent-white btn-contact" id="nav--btn-contact">Contact Us</button></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>