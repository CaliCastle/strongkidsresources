<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title', 'Home') - {{ config('app.name') }}</title>

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
	@include('partials.nav')

	<div class="hidden" hidden>
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
</body>
</html>
