<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<div class="container mt-5">
		<h1>{{ $beers->name }}</h1>
		<img src="{{ $beers->img }}" alt="" style="width: 300px">
		<p>{{ $beers->type }}</p>
		<p>{{ $beers->alcohol }}</p>
		<p>{{ $beers->description }}</p>
		<p>{{ $beers->price }}</p>
	</div>
	
	
</body>
</html>