<div class="sidebar">
	<div class="sidebar-nav">
		<ul>
			<li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
			<li class="{{Request::is('portfolio') ? 'active' : ''}}"><a href="/portfolio">Portfolio</a></li>
			<li class="{{Request::is('team') ? 'active' : ''}}"><a href="/team">Our Team</a></li>
			<li class="{{Request::is('faq') ? 'active' : ''}}"><a href="/faq">FAQ</a></li>
			<li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact Us</a></li>
		</ul>
	</div>
</div>