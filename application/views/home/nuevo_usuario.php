<div class="row-fluid log-in">
  <div class="col-md-offset-1 col-md-3 form-createuser">
    <h2 class="form-create-user-title" >Nuevo Usuario</h2>
    <div class="page-header page-header-custom" ></div>
    <form method="POST" action="<?=$action_url?>">
      <div class="form-group">
        <input required value="<?=isset($errors->user_info) ? $errors->user_info->user : ""?>" name="usuario" class="form-control" placeholder="Usuario">
      </div>
      <div class="form-group">
        <input required value="<?=isset($errors->user_info) ? $errors->user_info->password : ""?>" name="contrasenia" type="password" class="form-control" placeholder="Contraseña">
      </div>
      <div class="page-header page-header-custom" ></div>
      <div class="form-group">
        <input value="<?=isset($errors->user_info) ? $errors->user_info->name : ""?>" name="nombre" class="form-control" placeholder="Nombre">
      </div>
      <div class="form-group">
        <input required value="<?=isset($errors->user_info) ? $errors->user_info->last_name : ""?>" name="apellido" class="form-control" placeholder="Apellido">
      </div>
      <div class="form-group">
        <input required value="<?=isset($errors->user_info) ? $errors->user_info->address : ""?>" name="direccion" class="form-control" placeholder="Dirección">
      </div>
      <div class="form-group">
        <input required value="<?=isset($errors->user_info) ? $errors->user_info->tel : ""?>" name="telefono" class="form-control" placeholder="Teléfono">
      </div>
      <div class="form-group">
        <input required value="<?=isset($errors->user_info) ? $errors->user_info->email : ""?>" name="email" class="form-control" placeholder="Email">
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
      if (isset($errors->errors))
        foreach ($errors->errors as $k => $v) { 
    ?>
        <div class="alert alert-danger" role="alert"><?=$v?></div>
    <?php 
        } 
    ?>
  </div>
</div>
