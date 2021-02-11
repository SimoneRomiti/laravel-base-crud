@extends('layout.template')

@section('main')
	<div class="container">
		<form action="{{ route('beers.store') }}" method="post">
			@csrf
			@method('POST')

			<div class="form-group">
				<label for="name">Nome Birra</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
			</div>

			<div class="form-group">
				<label for="type">Tipo</label>
				<input type="text" class="form-control" id="type" name="type" placeholder="Tipo">
			</div>

			<div class="form-group">
				<label for="alcohol">Gradazione alcolica</label>
				<input type="text" class="form-control" id="alcohol" name="alcohol" placeholder="Gradazione">
			</div>

			<div class="form-group">
				<label for="price">Prezzo</label>
				<input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
			</div>

			<div class="form-group">
				<label for="description">Descrizione</label>
				<textarea class="form-control" id="description" name="description" rows="3"></textarea>
			</div>

			<div class="form-group">
				<label for="img">Immagine</label>
				<textarea class="form-control" id="img" name="img" rows="3"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Crea</button>
			<a href="{{ route('beers.index') }}" class="btn btn-secondary">Indietro</a>
		</form>
	</div>
	
@endsection

