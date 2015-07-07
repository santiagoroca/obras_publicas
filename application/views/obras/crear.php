<div class="page-header page-header-custom" >
	<h1 class="update-user-title" >Cargar nueva Obra</h1>
</div>
<form method="POST" action="<?=$action_url?>">
	<div class="form-group">
		<input required name="titulo_obra" class="form-control" placeholder="Titulo Obra">
	</div>
	<div class="form-group">
		<input required name="breve_descripcion" type="password" class="form-control" placeholder="Breve Descripción">
	</div>
	<div class="form-group">
		<textarea class="form-control avoidresize" rows="3" placeholder="Descripción Detallada"></textarea>
	</div>
	<div class="form-group">
		<textarea class="form-control avoidresize" rows="3" placeholder="Descripción Detallada"></textarea>
		<div class="form-group">
			<label for="exampleInputFile">File input</label>
			<input type="file" id="exampleInputFile">
			<p class="help-block">Example block-level help text here.</p>
		</div>
	</div>
</form>