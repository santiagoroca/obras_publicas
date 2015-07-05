<div class="row log-in">
  <div class="col-md-5"></div>
  <div class="col-md-2 form-createuser">
    <h2 class="form-create-user-title" >Iniciar Sesion</h2>
    <div class="page-header page-header-custom" ></div>
    <form class="form-horizontal" action="<?=$action_url?>" method="POST">
      <div class="form-group">
        <div class="col-sm-12">
          <input name="usuario" type="text" class="form-control" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input name="contrasenia" type="password" class="form-control" placeholder="Password">
        </div>
      </div>
      <div class="row-fluid">
        <div class="col-md-8">
         <a href="<?=$new_user_url?>">Nuevo Usuario</a>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <button type="submit" class="btn btn-default">Ingresar</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>