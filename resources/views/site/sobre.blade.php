@extends('layouts.site')

@section('content')

<div class="container">
	<div class="row section">
		<h3 align="center">Sobre</h3>
		<div class="divider"></div>
	</div>
	<div class="row section">
		<div class="col s12 m6">
			@if(isset($paginas->mapa))
				<div class="video-container">
					{!! $paginas->mapa !!}
				</div>
			@else
				<img class="responsive-img" src="{{ asset($paginas->imagem) }}" alt="">
			@endif
			
		</div>
		<div class="col s12 m6">
			<h4>{{ $paginas->titulo }}</h4>
			<blockquote>
				{{ $paginas->descricao }}
			</blockquote>
			<p>{{ $paginas->texto }}</p>
			
		</div>
	</div>
   
</div>
@endsection
