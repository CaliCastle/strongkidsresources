<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#465d63">
	<meta name="theme-color" content="#ffffff">

	<title>@yield('title', 'Home') - {{ config('app.name') }}</title>

	<!-- Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
	@include('partials.nav')

	<header class="header">
		<div class="carousel" data-width="100%" data-ratio="8/3" data-fit="cover" data-loop="true" data-autoplay="true" data-trackpad="true" data-keyboard="true">
			@for($i = 1; $i <= 3; $i++)
				<img src="/images/bg{{ $i }}.jpg" alt="Background Image">
			@endfor
		</div>
		<div class="logo bounceInUp">
			<img src="/images/Logo.png" alt="Logo">
		</div>
	</header>

	<main class="content">
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
	</footer>

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

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"></script>

	<script>
        $(document).ready(function(){
			$('.carousel').fotorama();
        });
	</script>
</body>
</html>
