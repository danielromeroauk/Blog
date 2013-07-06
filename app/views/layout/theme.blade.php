<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="{{ $descript }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="Sofdev">

    <meta itemprop="name" content="{{ $title }}">
    <meta itemprop="description" content="{{ $descript }}">
    <meta property="og:locale" content="es_ES">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $descript }}">
    <meta property="og:url" content="http://miautousado.com">
    <meta property="og:site_name" content="miautousado.com">
    <meta property="og:type" content="">

	<title>{{ $title }} | {{ $subtitle }}</title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    {{ HTML::style('http://fonts.googleapis.com/css?family=Ubuntu+Condensed') }}
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/bootstrap-responsive.css') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/fn_Jquery.js') }}
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="brand">MiAutoUsado.com</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><?php echo HTML::link('/','Inicio');?></li>
                    </ul>
                    {{ Form::open(array('url'=>'login','class'=>'navbar-form pull-right')) }}
                    {{ Form::text('user',null,array('class'=>'span2','placeholder'=>'Usuario')) }}
                    {{ Form::password('pass',array('class'=>'span2','placeholder'=>'Contraseña')) }}
                    {{ Form::submit('Ingresar',array('class'=>'btn btn-info')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    <section class="container">
        @yield('content')
    </section>
</body>
</html>