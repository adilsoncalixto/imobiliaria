@extends('layouts.app')

@section('content')

<div class="container">
	<h2 class="center">Lista de Imóveis</h2>

	<div class="row">
		<nav>
		    <div class="nav-wrapper green">
		      <div class="col s12">
		        <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
		        <a class="breadcrumb">Lista de Imóvel</a>
		      </div>
		    </div>
	  </nav>
		
	</div>

<div class="row">
	<table>
		<tr>
			<th>Id</th>
			<th>Título</th>
			<th>Status</th>
			<th>Cidade</th>
			<th>Valor</th>
			<th>Imagem</th>
			<th>Publicado</th>
			<th>Ação</th>
		</tr>
		<tbody>
			@foreach($registros as $registro)
				<tr>
					<td>{{ $registro->id }}</td>
					<td>{{ $registro->titulo }}</td>
					<td>{{ $registro->status }}</td>
					<td>{{ $registro->cidade->nome }}</td>
					<td>R$ {{ number_format($registro->valor,2,",",".") }}</td>
					<td><img  width="100" src="{{ asset($registro->imagem) }}" alt=""></td>
					<td>{{ $registro->publicar }}</td>
					<td>
						<a class="btn orange" href="{{ route('admin.imoveis.editar', $registro->id)}}">Editar</a>
						<a class="btn red" href="Javascript: if(confirm('Deletar esse registro?')){
						window.location.href='{{ route('admin.imoveis.deletar', $registro->id) }} '}">Deletar</a>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

	

</div>


	<div class="row">
		<a class="btn blue" href="{{ route('admin.imoveis.adicionar') }}">Adicionar</a>
	</div>

</div>

@endsection