<div class="input-field">
	<input type="text" name="titulo" class="validade" value="{{ isset($pagina->titulo) ? $pagina->titulo : '' }}">
	<label for="">Título</label>
</div>

<div class="input-field">
	<input type="text" name="descricao" class="validade" value="{{ isset($pagina->descricao) ? $pagina->descricao : '' }}">
	<label for="">Descrição</label>
</div>

@if(isset($pagina->email))

<div class="input-field">
	<input type="text" name="email" class="validade" value="{{ isset($pagina->email) ? $pagina->email : '' }}">
	<label for="">E-Mail</label>
</div>

@endif

<div class="input-field">
	<textarea name="texto" class="materialize-textarea">
		{{ isset($pagina->texto) ? $pagina->texto : '' }}
	</textarea>
	<label for="">Texto</label>
</div>

<div class="row">
	<div class="file-field input-field col m6 s12">
	<div class="btn">
		<span>Imagem</span>
		<input type="file" name="imagem">
	</div>
	<div class="file-path-wrapper">
		<input type="text" class="file-path validade">
	</div>
		
	</div>

	<div class="col m6 s12">
		@if(isset($pagina->imagem))
			<img width="120" src="{{ asset($pagina->imagem) }}" alt="">
		@endif
		
	</div>
	
</div>

<div class="input-field">
	<textarea name="mapa" class="materialize-textarea">
		{{ isset($pagina->mapa) ? $pagina->mapa : '' }}
	</textarea>
	<label for="">Mapa</label>
</div>