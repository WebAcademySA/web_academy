<!doctype html>
<html>
<head>
<title>@yield('tittle', 'Documento sin título')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{HTML::style('../public/assets/css/bootstrap.min.css, array ('media' => 'screen'))'}}
</head>
<body>
	<div id="wrap">
    	<div class="container">
        	@yield('content')
        </div>
    </div>
    <script src="../public/assets/js/jquery.js"></script>
    {{HTML::script('../public/assets/js/bootstrap.min.js')}}
</body>
</html>