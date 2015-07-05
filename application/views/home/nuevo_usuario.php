<div class="row-fluid log-in">
  <div class="col-md-offset-1 col-md-3 form-createuser">
    <h2 class="form-create-user-title" >Nuevo Usuario</h2>
    <div class="page-header page-header-custom" ></div>
    <form method="POST" action="<?=$action_url?>">
      <div class="form-group">
        <input name="usuario" class="form-control" placeholder="Usuario" required>
      </div>
      <div class="form-group">
        <input name="contrasenia" type="password" class="form-control" placeholder="Contraseña" required>
      </div>
      <div class="page-header page-header-custom" ></div>
      <div class="form-group">
        <input name="nombre" class="form-control" placeholder="Nombre" required>
      </div>
      <div class="form-group">
        <input name="apellido" class="form-control" placeholder="Apellido" required>
      </div>
      <div class="form-group">
        <input name="direccion" class="form-control" placeholder="Dirección" required>
      </div>
      <div class="form-group">
        <input name="telefono" class="form-control" placeholder="Teléfono" required>
      </div>
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="row-fluid">
        <div class="col-md-offset-9 col-md-3">
          <div class="form-group">
            <button type="submit" class="btn btn-default">Registrar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-5">
    <?php 
      if ($errors)
        foreach ($errors as $k => $v) { 
    ?>
        <div class="alert alert-danger" role="alert"><?=$v?></div>
    <?php 
        } 
    ?>
    <div class="alert alert-danger" role="alert"></div>
  </div>
</div>