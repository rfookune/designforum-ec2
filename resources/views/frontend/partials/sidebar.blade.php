<div class="navigation navbar-fixed-top">
    <nav>
    	<button type="button" class="sidebar-toggle collapsed">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="title">Close</span>
		</button>
        <div class="sidebar">
			<div class="sidebar-nav">
				<ul>
					<li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
					<li class="{{Request::is('services') ? 'active' : ''}}"><a href="/services">Services</a></li>
					<li class="{{Request::is('portfolio') ? 'active' : ''}}"><a href="/portfolio">Portfolio</a></li>
					<li class="{{Request::is('team') ? 'active' : ''}}"><a href="/team">Our Team</a></li>
					<li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact Us</a></li>
				</ul>
			</div>
		</div>
    </nav>
</div>
	