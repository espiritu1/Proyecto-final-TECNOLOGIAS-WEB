
<?php include("db.php") ?>

<?php include("includes/header.php"); ?>
<div class="col-md-4 mx-auto">
  <h1>Inicio de sesión</h1>
      <div class="card card-body">
        
      <form action="logear.php" method="POST">
        
           <div class="form-group">
              <input type="text" name="nombre"   tabindex="2" alt="ingresa tu nombre de usuario" class ="form-control" placeholder="Nombre"  required autofocus>
            </div>

            <div class="form-group">
                <input type="password" name="pass"  tabindex="3" alt="ingresa tu contraseña" class ="form-control" placeholder="Contraseña" required >
            </div>


        <input type="submit" class="btn btn-success" tabindex="4" alt="iniciar misecion" />
        <stron> <a type="submit" href='registrarse.php' tabindex="5" alt=" crear una cuenta" style="padding-left: 15px">   crear una cuenta   </a></stron>
        
      </form>
      </div>
    </div>
  </div>
</div>