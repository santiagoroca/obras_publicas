<div class="row log-in">
  <div class="col-md-1"></div>
  <div class="col-md-3 form-createuser">
    
    <h2 class="form-create-user-title" >Nuevo Usuario</h2>
    
    <div class="page-header page-header-custom" ></div>

    <form method="POST" action="<?=$action_url?>">
      <div class="form-group">
        <input value="<?=isset($errors->user_info) ? $errors->user_info->user : ""?>" name="usuario" class="form-control" placeholder="Usuario">
      </div>
      <div class="form-group">
        <input value="<?=isset($errors->user_info) ? $errors->user_info->password : ""?>" name="contrasenia" type="password" class="form-control" placeholder="Contraseña">
      </div>

      <div class="page-header page-header-custom" ></div>

      <div class="form-group">
        <input value="<?=isset($errors->user_info) ? $errors->user_info->name : ""?>" name="nombre" class="form-control" placeholder="Nombre">
      </div>
      <div class="form-group">
        <input value="<?=isset($errors->user_info) ? $errors->user_info->last_name : ""?>" name="apellido" class="form-control" placeholder="Apellido">
      </div>
      <div class="form-group">
        <input value="<?=isset($errors->user_info) ? $errors->user_info->address : ""?>" name="direccion" class="form-control" placeholder="Dirección">
      </div>
      <div class="form-group">
        <input value="<?=isset($errors->user_info) ? $errors->user_info->tel : ""?>" name="telefono" class="form-control" placeholder="Teléfono">
      </div>
      <div class="form-group">
        <input value="<?=isset($errors->user_info) ? $errors->user_info->email : ""?>" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-default pull-right">Registrar</button>
      </div>
    </form>
  </div>
</div>
