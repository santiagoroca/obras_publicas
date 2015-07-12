<div class="page-header page-header-custom" >
  <h1 class="update-user-title" >Cargar nueva Obra</h1>
</div>
<form method="POST" action="<?=$action_url?>">
  <div class="form-group">
    <input value="<?=isset($data->title) ? $data->title : ""?>" required name="titulo_obra" class="form-control" placeholder="Titulo Obra">
  </div>
  <div class="form-group">
    <input value="<?=isset($data->s_desc) ? $data->s_desc : ""?>" required name="breve_descripcion" class="form-control" placeholder="Breve Descripción">
  </div>
  <div class="form-group">
    <textarea name="descripcion_detallada_a" class="form-control avoidresize" rows="5" placeholder="Descripción Detallada"><?=isset($data->l_desc_a) ? $data->l_desc_a : ""?></textarea>
  </div>
  <div class="page-header">
    <h4>Seccion Inferior</h4>
  </div>
  <textarea name="descripcion_detallada_b" class="form-control avoidresize" rows="5" placeholder="Descripción Detallada"><?=isset($data->l_desc_b) ? $data->l_desc_b : ""?></textarea>
  <div class="form-group">
    <label class="log-in">Añade una foto de la Obra.</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Foto .jpg, .bmp</p>
  </div>
  <div class="page-header">
    <h4>Informacion Extra</h4>
  </div>
  <div class="form-group">
    <button id="add_button" type="button" class="btn btn-success">Agregar</button>
  </div>
  <div id="container" class="row form-group">
    <?php foreach ($extra_info as $k => $v) { ?>
      
      <div class="col-md-3">
        <div class="thumbnail">
          <span class="image_carrousel glyphicon glyphicon-minus" data-id="<?=$k ?>"></span>
          <div class="caption">
            <div class="form-group">
              <input value="<?=isset($v->title) ? $v->title : ""?>" name="info_extra[<?=$k ?>][title]" class="form-control" placeholder="Titulo" required>
            </div>
            <div class="form-group">
              <textarea name="info_extra[<?=$k ?>][description]" class="form-control avoidresize" rows="3" placeholder="Descripcion"><?=isset($v->desc) ? $v->desc : ""?></textarea>
            </div>
            <input id="i_name_<?=$k ?>" value="<?=isset($v->icon) ? $v->icon: ""?>" type="hidden" name="info_extra[<?=$k ?>][icon]" />
          </div>
        </div>
      </div>

    <?php } ?>
  </div>
  <div class="page-header">
    <h5>Progreso y Tags</h5>
  </div>
  <div class="progress">
    <div style="width:<?=isset($data->progress) ? $data->progress : "0"?>%" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
      <span class="sr-only"></span>
      <input id="progress_bar" value="0" type="hidden" name="progreso" />
    </div>
  </div>
  <div class="form-group">
    <input value="<?=isset($data->tags) ? $data->tags : ""?>" name="tag" class="form-control" placeholder="Tags eg: cordoba, obra, bienestar" required>
  </div>
  <div class="row-fluid">
    <button type="submit" class="btn btn-success pull-right">Crear</button>
  </div>
</form>
<script type="text/template" id="template">
<div class="col-md-3">
  <div class="thumbnail">
    <span class="image_carrousel glyphicon glyphicon-minus" data-id="<%= index %>"></span>
    <div class="caption">
      <div class="form-group">
        <input name="info_extra[<%= index %>][title]" class="form-control" placeholder="Titulo" required>
      </div>
      <div class="form-group">
        <textarea name="info_extra[<%= index %>][description]" class="form-control avoidresize" rows="3" placeholder="Descripcion"></textarea>
      </div>
      <input id="i_name_<%= index %>" value="0" type="hidden" name="info_extra[<%= index %>][icon]" />
    </div>
  </div>
</div>
</script>
<script>
$ (document).ready (function () {
  var template = _.template($("#template").html());
  var indexOf = <?=sizeof($extra_info)?>;
  var icons = [
    'image_carrousel glyphicon glyphicon-piggy-bank',
    'image_carrousel glyphicon glyphicon-stats',
    'image_carrousel glyphicon glyphicon-phone-alt',
    'image_carrousel glyphicon glyphicon-flash',
    'image_carrousel glyphicon glyphicon-shopping-cart',
    'image_carrousel glyphicon glyphicon-fire',
    'image_carrousel glyphicon glyphicon-calendar',
    'image_carrousel glyphicon glyphicon-remove-circle',
    'image_carrousel glyphicon glyphicon-ok-circle',
    'image_carrousel glyphicon glyphicon-off',
    'image_carrousel glyphicon glyphicon-road',
    'image_carrousel glyphicon glyphicon-tree-conifer'
  ];

  $ ('.image_carrousel').each (function () {
    var id = $ (this).data ('id');
    var val = parseInt ($ ('#i_name_' + id).val ());
    $ (this).attr ('class', icons[val]);
  });

  $ ("#add_button").click (function () {
    $ ("#container").append (template({
      index: indexOf++
    }));
  });

  $ (document).delegate ('.image_carrousel', 'click', function () {
    var id = $ (this).data ('id');
    var val = parseInt ($ ('#i_name_' + id).val ()) + 1;
    var val = val == icons.length ? 0 : val;
    $ ('#i_name_' + id).val (val);
    $ (this).attr ('class', icons[val]);
  });

  $ ('.progress').click (function (e) {
    var c = e.offsetX;
    var t = $ (this).parent().width ();
    $ ('.progress-bar').width (parseInt (c * 101 / t) + "%");
    $ ('#progress_bar').val (parseInt (c * 101 / t));
  });

});
</script>