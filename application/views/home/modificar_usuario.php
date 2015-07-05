<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1 class="update-user-title" >Mis Datos</h1>
    
    <?php if ($errors)
      foreach ($errors as $key => $value) { ?>
        <div class="alert alert-danger" role="alert"><?=$value?></div>
    <?php } ?>
    <?php if ($success) { ?>
        <div class="alert alert-success" role="alert"><?=$success?></div>
    <?php } ?>

    <div class="page-header page-header-custom" ></div>
    <form method="POST" action="<?=$action_url_user_info?>">
      <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <label >Usuario</label>
            <input readonly value="<?=isset($data->user) ? $data->user : ""?>" name="usuario" class="form-control" placeholder="Usuario" required>
          </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
          <div class="form-group">
            <label >Contraseña</label>
            <input name="contrasenia" type="password" class="form-control" placeholder="Contraseña" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-10 col-md-2">
          <div class="form-group">
            <button type="submit" class="btn btn-default">Guardar</button>
          </div>
        </div>
      </div>
    </form>
    <div class="page-header page-header-custom" ></div>
    <div class="row">
      <form method="POST" action="<?=$action_url_profile_info?>">
        <div class="col-md-5">
          <div class="form-group">
            <label >Nombre</label>
            <input value="<?=isset($data->name) ? $data->name : ""?>" name="nombre" class="form-control" placeholder="Nombre" required>
          </div>
          <div class="form-group">
            <label >Fecha de Nacimiento</label>
            <input value="<?=isset($data->birthdate) ? $data->birthdate : ""?>" name="fechadenacimiento" class="form-control" placeholder="Fecha de Nacimiento" required>
          </div>
          <div class="form-group">
            <label >Teléfono</label>
            <input value="<?=isset($data->tel) ? $data->tel : ""?>" name="telefono" class="form-control" placeholder="Teléfono" required>
          </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
          <div class="form-group">
            <label >Apellido</label>
            <input value="<?=isset($data->last_name) ? $data->last_name : ""?>" name="apellido" type="text" class="form-control" placeholder="Apellido" required>
          </div>
          <div class="form-group">
            <label >Dirección</label>
            <input value="<?=isset($data->address) ? $data->address : ""?>" name="direccion" class="form-control" placeholder="Dirección" required>
          </div>
          <div class="form-group">
            <label >Email</label>
            <input value="<?=isset($data->email) ? $data->email : ""?>" type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-10 col-md-1">
            <div class="form-group">
              <button type="submit" class="btn btn-default">Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>