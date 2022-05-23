<?php include("db.php") ?>

<?php include("includes/header.php")?>
<div class="col-md-4 mx-auto">
  <h1> crear una Cuenta </h1>
      <div class="card card-body">
        <form action="save.php" method="POST">
            <div class="form-group">
              <input type="text" name="nombre" tabindex="" alt="introduce tu nombre" class ="form-control" placeholder="Nombre" autofocus required>
            </div>
              
              <div class="form-group">
                <input type="text" name="matricula" tabindex="" alt="introduce matricula"  class ="form-control" placeholder="matricula"  required>
              </div>

              <div class="form-group" tabindex="" >
                <select  class="form-group" name="carrera" id=""  required>
                <option value="">--selecciona tu Carrera--</option>
                <option alt="Igenieria de Software" value="Ingenieria de Software">Igenieria de Software</option>
                <option alt="Tecnologia Computacionales"value="Tecnologia Computacionales ">Tecnologia Computacionales</option>
                <option alt="redes"value="Redes">Redes</option></select>
              </div>

              <div>
               <div class="form-group" tabindex="" >
                <select  class="form-group" name="id_rol" id=""  required>
                <option value="">--selecciona un rol--</option>
                <option alt="Igenieria de Software" value="2">Maestro</option>
                <option alt="Tecnologia Computacionales"value="3">estudiante</option>
                
              </div>
          
          
              <div class="form-group">
                  <input type="text" tabindex="" alt="crea una contraseña" name="pass" class ="form-control"  placeholder="Pass"  required>
              </div>
          <input type="submit" tabindex="" alt="enviar mis datos y crear mi cuenta" class="btn btn-success btn-block" name="save" value="Guardar"  required/>  
        </form>
      </div>
      
    </div>
    

  
