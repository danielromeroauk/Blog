<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta property="og:locale" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="">

	<title></title>
</head>
<body>
	@if(Session::has('error'))
		<p>Error Usuario mal</p>
	@endif
	{{ Form::open(array('url'=>'valido')) }}
		<p>{{ Form::label('username','Username') }}</p>
		<p>{{ Form::text('user') }}</p>
		<p>{{ Form::label('password','Password') }}</p>
		<p>{{ Form::password('pass') }}</p>
		<p>{{ Form::submit('Validar') }}</p>
	{{ Form::close() }}
</body>
</html>
