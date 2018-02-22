<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- <meta name="description" content=""> -->
	<meta name="keywords" content="SEL, social and emotional learning, SEL for student, Strong Kids, Strong Teens, Strong Start, resiliency, social skills program">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#465d63">
	<meta name="theme-color" content="#ffffff">

	<title>@yield('title', 'Home') - {{ config('app.name') }}</title>

	<!-- Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}?v=4">

	<!-- Start of Async Drift Code -->
	<script async>
        !function() {
            var t;
            if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
                t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                t.factory = function(e) {
                    return function() {
                        var n;
                        return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
                t[e] = t.factory(e);
            }), t.load = function(t) {
                var e, n, o, i;
                e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
                    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
            });
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('gti7u8nwf3f5');
	</script>
	<!-- End of Async Drift Code -->
</head>
<body>
	@include('partials.nav')

	<div id="app">
		<header class="header">
			<div class="carousel" data-width="100%" data-ratio="2/1" data-fit="cover" data-loop="true" data-autoplay="true" data-trackpad="true" data-keyboard="true">
				<img src="/images/banners/shutterstock_44645314.jpg" alt="Background Image">
				<img src="/images/banners/shutterstock_309241985.jpg" alt="Background Image">
				<img src="/images/banners/shutterstock_309242000.jpg" alt="Background Image">
				<img src="/images/banners/shutterstock_414397345.jpg" alt="Background Image">
				<img src="/images/banners/shutterstock_447240079.jpg" alt="Background Image">
				<img src="/images/anna-samoylova-535880.jpg" alt="Background Image">
				<img src="/images/nathaniel-tetteh-300252.jpg" alt="Background Image">
			</div>
			<div class="logo bounceInUp">
				<img src="/images/Logo.png" alt="Logo">
			</div>
		</header>

		<main class="content">
			@if(request()->getRequestUri() != "/")
				<h2 class="title">@yield('title')</h2>
			@endif

			@yield('content')
		</main>

		<footer class="footer">
			<div class="publishers">
				<a target="_blank" href="http://www.casel.org/">
					<img src="/images/Casel.png" alt="Casel">
				</a>
				<a target="_blank" href="http://www.brookespublishing.com/">
					<img src="/images/Brookes.png" alt="Brookes">
				</a>
			</div>
			<div class="social">
				<a target="_blank" href="https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Fstrongkidsresources.com%2F&ref_src=twsrc%5Etfw&text=Check%20out%20Strong%20Kids%20Resources&tw_p=tweetbutton&url=http%3A%2F%2Fstrongkidsresources.com%2F">
					<svg class="twitter">
						<use xlink:href="#twitter"></use>
					</svg>
				</a>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstrongkidsresources.com%2F&display=popup&ref=plugin&src=like&kid_directed_site=0&app_id=312342178864243">
					<svg class="facebook">
						<use xlink:href="#facebook"></use>
					</svg>
				</a>
			</div>
			<div class="copyright">
				<p>Copyright &copy; Merrell's Strong Kids {{ date('Y') }}</p>
			</div>
			<div class="photos">
				<p>Photos by Anna Samoylova & Nathaniel Tetteh on Unsplash</p>
			</div>
			<div class="developer">
				<p>Website Designed &amp; Developed by <a href="https://calicastle.com">Cali Castle</a>.</p>
			</div>
		</footer>
	</div>

	<div class="svgs hidden" hidden>
		{!! file_get_contents(public_path('svgs/about-me.svg')) !!}
		{!! file_get_contents(public_path('svgs/activity-history.svg')) !!}
		{!! file_get_contents(public_path('svgs/book.svg')) !!}
		{!! file_get_contents(public_path('svgs/books.svg')) !!}
		{!! file_get_contents(public_path('svgs/change.svg')) !!}
		{!! file_get_contents(public_path('svgs/change-theme.svg')) !!}
		{!! file_get_contents(public_path('svgs/facebook.svg')) !!}
		{!! file_get_contents(public_path('svgs/info.svg')) !!}
		{!! file_get_contents(public_path('svgs/kid.svg')) !!}
		{!! file_get_contents(public_path('svgs/letter.svg')) !!}
		{!! file_get_contents(public_path('svgs/knowledge-sharing.svg')) !!}
		{!! file_get_contents(public_path('svgs/social-group.svg')) !!}
		{!! file_get_contents(public_path('svgs/spreadsheet.svg')) !!}
		{!! file_get_contents(public_path('svgs/support.svg')) !!}
		{!! file_get_contents(public_path('svgs/tips.svg')) !!}
		{!! file_get_contents(public_path('svgs/twitter.svg')) !!}
		{!! file_get_contents(public_path('svgs/wise-mind.svg')) !!}
	</div>

	<script src="{{ asset('js/app.js') }}?v=2"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>

	<script>
        $(document).ready(function(){
			$('.carousel').fotorama();
        });

        var slideout = new Slideout({
            'panel': document.getElementById('app'),
            'menu': document.getElementById('side-menu'),
            'padding': 280,
            'tolerance': 70
        });

        // Toggle button
        document.querySelector('.side-nav-toggle').addEventListener('click', function() {
            slideout.toggle();
            this.classList.toggle("open");
        });
	</script>
</body>
</html>
