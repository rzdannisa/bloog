<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    <title>KING</title>

    <link href="{{ url('css/metro.css') }}" rel="stylesheet">
    <link href="{{ url('css/metro-icons.css') }}" rel="stylesheet">
    <link href="{{ url('css/metro-responsive.css') }}" rel="stylesheet">
    <link href="{{ url('css/metro-schemes.css') }}" rel="stylesheet">

    <link href="{{ url('css/docs.css') }}" rel="stylesheet">

    <script src="{{ url('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ url('js/metro.js') }}"></script>
    <script src="{{ url('js/docs.js') }}"></script>
    <script src="{{ url('js/prettify/run_prettify.js') }}"></script>
</head>

<body>
	@include('menu')
	<div class="page-content">
		<div class="container">
			<div class="no-overflow" style="padding-top: 40px">
				@yield('content')
			</div>
		</div>
	</div>

    @yield('footer')

	</body>
</html>