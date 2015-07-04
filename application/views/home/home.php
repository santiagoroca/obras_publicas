<div class="row log-in">
  <div class="col-md-4"></div>
  <div class="col-md-4 form-createuser">
    <form class="form-horizontal" action="<?=$action_url?>" method="POST">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
        <div class="col-sm-10">
          <input name="usuario" type="text" class="form-control" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
        <div class="col-sm-10">
          <input name="contrasenia" type="password" class="form-control" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Ingresar</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-4"></div>
</div>