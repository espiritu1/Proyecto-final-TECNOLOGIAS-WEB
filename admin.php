<?php 
include("db.php");


$username = $_SESSION['username'];
if(!isset($username)){
  header("location: login.php");
  }else{?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PHP CRUD MYSQL</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" >
    <img src="img/uv.png" alt="logo" style="width:50px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="nosotros1.php ">Acerca de nosotros</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="prestamos.php">lista de usuarios </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="bitacora.php">bitacora</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="observaciones.php">Observaciones acerca del quipo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="chat.php">Chat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" >             </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" >              </a>
    </li>
  
    

     <li class="nav-item">
      <a class="navbar-brand"  tanindex="" alt="volver a la pagina principal">  Hola  <?php echo $username;} ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" >             </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" >              </a>
    </li>

    <li class="nav-item">
          <?php
                  echo "<a class='nav-item' href='includes/salir.php' tabindex='' alt='cerrar mi session'>cerrar session </a>";
                ?>
    </li>
    <li class="nav-item">
      <a class="nav-link" >             </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" >              </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <?php 
          date_default_timezone_set("America/Mexico_City");

          echo date("d-");
          echo date("m-");
          echo date("Y");
       
        ?>
      </a>
    </li>
  </ul>
</nav>
    <br>
  



<div class="container p-3" >
    <div class="row">
        <div class="col-md-5.5">

        <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            

        <?php } ?>

            <div class="card card-body">

              <form action="save_admin.php"  alt="formulario crear una cuenta" method="POST">
                <div>
                  <h3>agregar</h3>
                  <br>
                </div>

                <div class="form-group">
                  <input type="text" tabindex="" alt="escribe tu nombre" name="nombre" class ="form-control" placeholder="Nombre" autofocus required>
                </div>


                <div class="form-group">
                  <input type="text" tabindex="" alt="escribe una matricula" name="matricula" class ="form-control" placeholder="Matricula " autofocus required>
                </div>

                <div class="form-group" tabindex="" >
                <select  class="form-group" name="carrera" id=""  required>
                <option value="">--selecciona tu Carrera--</option>
                <option alt="Igenieria de Software" value="Ingenieria de Software">Igenieria de Software</option>
                <option alt="Tecnologia Computacionales"value="Tecnologia Computacionales ">Tecnologia Computacionales</option>
                <option alt="redes"value="Redes">Redes</option></select>
              </div>

                <div tabindex="" alt="crea una contraseña"class="form-group">
                  <select class="form-group" name="id_rol" id=""  required>
                  <option value="">-- seleciona un rol --</option>
                  <option  alt="seleccioanr carrerraIngenieria de Software" value="1">ADMIN</option>
                  <option  alt="seleccioanr carrerra Tecnologia Computacionales" value="2">Maestro</option>
                  <option  alt="seleccioanr carrerra redes" value="3">Estudiante</option></select>
                </div>


                <div class="form-group">
                  <input  tabindex="" alt="crea una contraseña "type="text" name="pass" class ="form-control" placeholder="Pass" autofocus required>
                </div>

                <input tabindex="" alt="guardar guardar y crear la cuenta" type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
               

              </form>
            </div>
            

        </div>




        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Matricula</th>
                        <th>Carrera</th>
                        <th>rol</th>
                        <th>pass</th>
                        <th>accion</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT * FROM usarios";
                        $consuta= mysqli_query( $conn, $sql );
                        
                        while($row = mysqli_fetch_array($consuta) ){ ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['matricula'] ?></td>
                            <td><?php echo $row['carrera'] ?></td>
                            <td><?php echo $row['id_rol'] ?></td>
                            <td><?php echo $row['pass'] ?></td>
                            
                            <td>
                               <a tabindex="10" alt="editar usuarios " href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                   <i class="fas fa-marker"> </i>
                               </a> 
                                  <a tabindex="11" alt="borrar usuario BE careful" href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                   <i class="far fa-trash-alt"></i>
                               </a> 
                            </td>
                        </tr>

                        
                    <?php } ?>
                </tbody>

            </table>

        </div>

    </div>



</div>

<?php include("includes/footer.php") ?>
  
