<!DOCTYPE html>
<html>

<head>
	<title>@yield('title')</title>
	<link href="{!! asset('css/template_style.css') !!}" rel="stylesheet">
	<script type="text/javascript" src="{!! asset('js/template.js') !!}"></script>
</head>

<body>
@include('partials.navbar')

@yield('content')
</body>

</html>
