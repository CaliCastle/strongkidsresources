<ul class="nav-links">
	<li>
		<a href="/" class="nav-link{{ current_uri_is('/') }}">Home</a>
	</li>
	<li>
		<a href="#" class="nav-link{{ current_uri_is('about') }} has-dropdown">About</a>
		<div class="nav-dropdown-wrapper">
			<ul class="nav-dropdown">
				<li>
					<a href="/about/general" class="nav-dropdown-link">
						<svg class="icon"><use xlink:href="#info" width="25" height="25"></use></svg>
						<span>General Information</span>
					</a>
				</li>
				<li>
					<a href="/about/history" class="nav-dropdown-link">
						<svg class="icon"><use xlink:href="#history" width="25" height="25"></use></svg>
						<span>History of Development</span>
					</a>
				</li>
				<li>
					<a href="/about/dr-merrell" class="nav-dropdown-link">
						<svg class="icon"><use xlink:href="#about-me" width="25" height="25"></use></svg>
						Dr. Kenneth Merrell
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li>
		<a href="#" class="nav-link{{ current_uri_is('new') }} has-dropdown">What's New</a>
		<div class="nav-dropdown-wrapper">
			<ul class="nav-dropdown">
				<li>
					<a href="/new/program">
						<svg class="icon"><use xlink:href="#change-programs" width="25" height="25"></use></svg>
						Program Changes
					</a>
				</li>
				<li>
					<a href="/new/lesson">
						<svg class="icon"><use xlink:href="#change-lessons" width="25" height="25"></use></svg>
						Lesson Changes
					</a>
				</li>
				<li>
					<a href="/new/sel">
						<svg class="icon"><use xlink:href="#sel" width="25" height="25"></use></svg>
						SEL Competencies
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li>
		<a href="#" class="nav-link{{ current_uri_is('research') }} has-dropdown">Research</a>
		<div class="nav-dropdown-wrapper">
			<ul class="nav-dropdown">
				<li>
					<a href="/research/mindfulness">
						<svg class="icon"><use xlink:href="#mind" width="25" height="25"></use></svg>
						Mindfulness
					</a>
				</li>
				<li>
					<a href="/research/social">
						<svg class="icon"><use xlink:href="#group" width="25" height="25"></use></svg>
						Social and Emotional Learning
					</a>
				</li>
				<li>
					<a href="/research/strong-kids">
						<svg class="icon"><use xlink:href="#kid" width="25" height="25"></use></svg>
						Strong Kids Program
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li>
		<a href="#" class="nav-link{{ current_uri_is('authors') }} has-dropdown">Authors</a>
		<div class="nav-dropdown-wrapper">
			<ul class="nav-dropdown">
				<li>
					<a href="/authors/strong-kids-and-strong-teens">
						<svg class="icon"><use xlink:href="#book" width="25" height="25"></use></svg>
						Strong Kids &amp; Strong Teens Authors
					</a>
				</li>
				<li>
					<a href="/authors/strong-start">
						<svg class="icon"><use xlink:href="#book" width="25" height="25"></use></svg>
						Strong Start Authors
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li>
		<a href="/purchase" class="nav-link{{ current_uri_is('purchase') }}">Purchase</a>
	</li>
	<li>
		<a href="#" class="nav-link{{ current_uri_is('resources') }} has-dropdown">Resources</a>
		<div class="nav-dropdown-wrapper">
			<ul class="nav-dropdown">
				<li>
					<a href="/resources/todos">
						<svg class="icon"><use xlink:href="#info" width="25" height="25"></use></svg>
						Implementation To Dos
					</a>
				</li>
				<li>
					<a href="/resources/letter">
						<svg class="icon"><use xlink:href="#letter" width="25" height="25"></use></svg>
						Parent Letter
					</a>
				</li>
				<li>
					<a href="/resources/books">
						<svg class="icon"><use xlink:href="#books" width="25" height="25"></use></svg>
						Books, Websites and Videos
					</a>
				</li>
				<li>
					<a href="/resources/training">
						<svg class="icon"><use xlink:href="#support" width="25" height="25"></use></svg>
						Training and Support
					</a>
				</li>
				<li>
					<a href="/resources/assessment">
						<svg class="icon"><use xlink:href="#knowledge" width="25" height="25"></use></svg>
						Assessment Material
					</a>
				</li>
				<li>
					<a href="/resources/tips">
						<svg class="icon"><use xlink:href="#tips" width="25" height="25"></use></svg>
						Tips From Users
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li>
		<a href="/faq" class="nav-link{{ current_uri_is('faq') }}">FAQs</a>
	</li>
	{{--<li>--}}
	{{--<a href="/training" class="nav-link{{ current_uri_is('training') }}">Training &amp; Support</a>--}}
	{{--</li>--}}
	<li>
		<a href="/contact" class="nav-link{{ current_uri_is('contact') }}">Contact Us</a>
	</li>
</ul>