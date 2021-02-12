@extends('layout.template')

@section('main')
	<div class="container">
		<form action="{{ route('beers.update', $beer->id) }}" method="post">
			@csrf
			@method('PUT')

			<div class="form-group">
				
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				
				<label for="name">Nome Birra</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ $beer->name }}">
			</div>

			<div class="form-group">
				<label for="type">Tipo</label>
				<input type="text" class="form-control" id="type" name="type" placeholder="Tipo" value="{{ $beer->type }}">
			</div>

			<div class="form-group">
				<label for="alcohol">Gradazione alcolica</label>
				<input type="text" class="form-control" id="alcohol" name="alcohol" placeholder="Gradazione" value="{{ $beer->alcohol }}">
			</div>

			<div class="form-group">
				<label for="price">Prezzo</label>
				<input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{ $beer->price }}">
			</div>

			<div class="form-group">
				<label for="description">Descrizione</label>
				<textarea class="form-control" id="description" name="description" rows="3">{{ $beer->description }}</textarea>
			</div>

			<div class="form-group">
				<label for="img">Immagine</label>
				<textarea class="form-control" id="img" name="img" rows="3">{{ $beer->img }}</textarea>
			</div>

			<button type="submit" class="btn btn-primary">Modifica</button>
			<a href="{{ route('beers.index') }}" class="btn btn-danger">Indietro</a>
		</form>
	</div>
	
@endsection

