@extends('layout.template')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('main')
	<div class="container mt-5 text-center">
		{{-- <table class="table table-dark table-striped">
			@foreach ($beers->getAttributes() as $key => $item)
			<tr>
				<td>{{ $key }}</td>
				<td>{{ $item }}</td>
			</tr>
			@endforeach	 --}}		
		

		{{-- <div class="card bg-dark text-white" style="width: 18rem;">
			<img src="{{ $beers->img }}" class="card-img-top" alt="">
			<div class="card-body">
				<h2 class="card-title">{{$beers->name}}</h2>
				<p class="card-text"><strong>Tipo: </strong> {{ $beers->type }}</p>
				<p class="card-text"><strong>Gradazione alcolica: </strong> {{ $beers->alcohol."%" }}</p>
				<p class="card-text">{{ $beers->description }}</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
  		</div>
		</div> --}}

		<div class="card mb-3 bg-dark text-white" style="max-width: 540px;">
			<div class="row align-items-center no-gutters">
				<div class="col-md-4">
					<img src="{{ $beers->img }}" alt="" style="width: 90%">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">{{$beers->name}}</h5>
						<p class="card-text"><strong>Tipo: </strong> {{ $beers->type }}</p>
						<p class="card-text"><strong>Gradazione alcolica: </strong> {{ $beers->alcohol."%" }}</p>
						<p class="card-text">{{ $beers->description }}</p>
					</div>
				</div>
			</div>
		</div>
		<a href="{{ route('beers.index') }}" class="btn btn-primary">FATTO</a>
	</div>
	
@endsection

	