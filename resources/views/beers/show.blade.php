<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<div class="container mt-5">
		<h1>{{ $beers->name }}</h1>
		<img src="{{ $beers->img }}" alt="" style="width: 300px">
		<p>Tipo: {{ $beers->type }}</p>
		<p>Gradazione alcolica: {{ $beers->alcohol."%" }}</p>
		<p>{{ $beers->description }}</p>
		<p>Prezzo: {{ number_format($beers->price, 2, ",", ".")."€" }}</p>
	</div>
	
	
</body>
</html>