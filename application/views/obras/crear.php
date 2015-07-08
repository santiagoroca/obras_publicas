<div class="page-header page-header-custom" >
	<h1 class="update-user-title" >Cargar nueva Obra</h1>
</div>
<form method="POST" action="<?=$action_url?>">
	<div class="form-group">
		<label>Titulo</label>
		<input required name="titulo_obra" class="form-control" placeholder="Titulo Obra">
	</div>
	<div class="form-group">
		<label>Breve Descripción</label>
		<input required name="breve_descripcion" class="form-control" placeholder="Breve Descripción">
	</div>
	<div class="form-group">
		<label>Descripción Detallada</label>
		<textarea class="form-control avoidresize" rows="3" placeholder="Descripción Detallada"></textarea>
	</div>
	<div class="form-group">
		<textarea class="form-control avoidresize" rows="3" placeholder="Descripción Detallada"></textarea>
		<div class="form-group">
			<label class="log-in">Añade una foto de la Obra.</label>
			<input type="file" id="exampleInputFile">
			<p class="help-block">Foto .jpg, .bmp</p>
		</div>
	<div class="row log-in">
		<div class="col-md-12">
                <div class="col-md-3">
                   <div class="thumbnail">
                    <img src="<?=base_url()?>assets/img/thumbnail.png" alt="...">
                    <div class="caption">
                    <label>Información Extra</label>
                    <input name="info_extra" class="form-control" placeholder="Información extra" required>
                    <label>Datos Extra</label>
                    <textarea class="form-control avoidresize" rows="3" placeholder="Datos Extra"></textarea>
                    </div>
                   </div>
                </div>
                <div class="col-md-3">
                <div class="thumbnail">
                   <img src="<?=base_url()?>assets/img/thumbnail.png" alt="...">
                   <div class="caption">
                     <label>Información Extra</label>
                     <input name="info_extra" class="form-control" placeholder="Información extra" required>
                     <label>Datos Extra</label>
                     <textarea class="form-control avoidresize" rows="3" placeholder="Datos Extra"></textarea>
                   </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="thumbnail">
                   <img src="<?=base_url()?>assets/img/thumbnail.png" alt="...">
                   <div class="caption">
                     <label>Información Extra</label>
                     <input name="info_extra" class="form-control" placeholder="Información extra" required>
                     <label>Datos Extra</label>
                     <textarea class="form-control avoidresize" rows="3" placeholder="Datos Extra"></textarea>
                   </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="thumbnail">
                   <img src="<?=base_url()?>assets/img/thumbnail.png" alt="...">
                   <div class="caption">
                     <label>Información Extra</label>
                     <input name="info_extra" class="form-control" placeholder="Información extra" required>
                     <label>Datos Extra</label>
                     <textarea class="form-control avoidresize" rows="3" placeholder="Datos Extra"></textarea>
                   </div>
                </div>
              </div>
            
	    </div>
	</div>
	<div class="row log-in">
		<div class="col-md-offset-1 col-md-10">
	        <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
	        <span class="label label-default">Obra</span>
<span class="label label-primary">Puente</span>
<span class="label label-success">Remodelacion</span>
<span class="label label-info">Intendencia</span>
<span class="label label-warning">Sinsacate</span>
<span class="label label-danger">En tiempo y forma</span>
	    </div>
	</div>
	<button type="submit" class="btn btn-success row col-md-offset-10 log-in">Guardar</button>
</form>