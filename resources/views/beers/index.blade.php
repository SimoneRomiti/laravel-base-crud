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
		<table class="table table-dark table-striped table-bordered">
		<thead>
			<th>Nome</th>
			<th>Tipo</th>
			<th>Gradazione</th>
			<th>Prezzo</th>
		</thead>
		<tbody>
			@foreach ($beers as $item)
				<tr>
					<td>{{ $item->name }}</td>
					<td>{{ $item->type }}</td>
					<td>{{ $item->alcohol }}</td>
					<td>{{ $item->price }}</td>
					<td class="text-center"><a href="{{ route('beers.show', ['beer' => $item->id]) }}" class="btn btn-outline-light">Dettaglio</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	
	
</body>
</html>