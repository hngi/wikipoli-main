	<footer id="footer">
		<hr id="hr">
		<nav id="nav-flex">
			<section class="link-group">
				<span class="group-desc">Company</span>
				<a href="{{ url('/About') }}">About Us</a>
				<a href="{{ url('/Careers') }}">Careers</a>
				<a href="{{ url('/Donation') }}">Donations</a>
			</section>
			<section class="link-group">
				<span class="group-desc">Help & Support</span>
				<a href="{{ url('/FAQs') }}">FAQ</a>
				<a href="{{ url('/contact-us') }}">Contact us</a>
			</section>
			<section class="link-group">
				<span class="group-desc">Legal</span>
				<a href="{{ url('/Terms') }}">Terms and Conditions</a>
				<a href="{{ url('/PrivacyPolicy') }}">Privacy Policy</a>
			</section>
			<section class="link-group">
				<span class="group-desc">Follow Us</span>
				<section id="socials">
					<a class="social-link" href=""><img src="{{asset('images/facebook-icon.png')}}" height="30px"></a>
					<a class="social-link" href=""><img src="{{asset('images/linkedin-icon.png')}}" height="30px"></a>
					<a class="social-link" href=""><img src="{{asset('images/twitter-icon.png')}}" height="30px"></a>
				</section>
			</section>
		</nav>
	</footer>