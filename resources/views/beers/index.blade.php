@extends('layout.template')

@section('main')
	<div class="container mt-5">

		@if (session('message'))
			<div class="alert alert-success">
				{{ session('message') }}
			</div>		
		@endif
		
		<table class="table table-dark table-striped table-bordered">
			<thead>
				<th>Nome</th>
				<th>Tipo</th>
				<th>Gradazione</th>
				<th>Prezzo</th>
				<th>Creato il</th>
				<th>Aggiornato il</th>
			</thead>
			<tbody>
				@foreach ($beers as $item)
					<tr>
						<td>{{ $item->name }}</td>
						<td>{{ $item->type }}</td>
						<td>{{ number_format($item->alcohol, 1, ",", ".")."%" }}</td>
						<td>{{ number_format($item->price, 2, ",", ".")."€" }}</td>
						<td>{{ $item->created_at }}</td>
						<td>{{ $item->updated_at }}</td>

						<td class="text-center">
							<a href="{{ route('beers.show', ['beer' => $item->id]) }}" class="btn btn-outline-light">
								<i class="fas fa-search-plus"></i>
							</a>
						</td>
						
						<td class="text-center">
							<a href="{{ route('beers.edit', ['beer' => $item->id]) }}" class="btn btn-outline-light">
								<i class="fas fa-pencil-alt"></i>
							</a>
						</td>

						<td class="text-center">
							<form method="post" action="{{ route('beers.destroy', $item->id) }}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-outline-light"><i class="far fa-trash-alt"></i></button>
							</form>
							</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-right">
			<a href="{{ route('beers.create') }}" class="btn btn-primary">Aggiungi</a>
		</div>
		
	</div>
	
@endsection
	
	