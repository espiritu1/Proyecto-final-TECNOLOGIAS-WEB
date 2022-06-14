<?php 
include("db.php");

$username = $_SESSION['username'];
if(!isset($username)){
  header("location: login.php");
  }else{?>

  <?php 
    $queryPROF = "SELECT id  FROM usarios WHERE nombre= '$username' ";
    $resultPROF = mysqli_query($conn, $queryPROF );
    while($row = mysqli_fetch_array ($resultPROF)){?>
      <?php $zx=$row['id'];?>
  <?php }?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>perfil del estudiante</title>
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
                  echo "<a class='nav-item' href='includes/salir.php'  tabindex='' alt='cerrar mi session'>cerrar session </a>";
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
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Matricula</th>
                        <th>Carrera</th>
                        <th>Contraseña</th>
                        <th>accion</th>

                    </tr>
                </thead>
                <tbody>

                    <?php                    
                        $sql ="SELECT * FROM usarios where nombre = '$username' ";
                        $consuta= mysqli_query( $conn, $sql );
                        
                        while($row = mysqli_fetch_array($consuta) ){ ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['matricula'] ?></td>
                            <td><?php echo $row['carrera'] ?></td>
                            <td><?php echo $row['pass'] ?></td>

                            <td>
                               <a tabindex="10" alt="editar usuarios " href="edit_estudiante.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                   <i class="fas fa-marker"> </i>
                               </a> 

                                <a tabindex="11" alt="borrar usuario BE careful" href="prestamo.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                   <i class="fa fa-desktop"></i>
                               </a> 
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container p-4" > 
  <div class="row">
    <div class="col-md-8 mx.auto">
      <div class="card card-body">
        <h3>si gustas puedes realizar un comentaria sobre el equipo</h3>

        <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>id_prestamo</th>
                      <th>id del equipo</th>
                      <th>Nombre del equipo</th>
                      <th>relizar comentaria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                         
                        $sql ="SELECT prestamos.id_prestamo, prestamos.id_usuario, prestamos.id_equipo, pc.nombre_equipo 
                        FROM pc 
                        INNER JOIN prestamos ON pc.id_equipo = prestamos.id_equipo 
                         where prestamos.id_usuario = '$zx';";
                        $consuta= mysqli_query( $conn, $sql);
                        while($row = mysqli_fetch_array($consuta) ){ ?>
                        <tr>
                            <td><?php echo $row['id_prestamo'] ?></td>
                            <td><?php echo $row['nombre_equipo'] ?></td>
                            <td><?php echo $row['id_equipo'] ?></td>
                            <td><?php echo $row['nombre_equipo'] ?></td>

                            <td>
                               <a tabindex="10" alt="editar usuarios " href="comentar.php?id=<?php echo $row['id_prestamo'] ?>" class="btn btn-secondary">
                                   <i class="fas fa-marker"> </i>
                               </a> 
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
      </div>
    </div> 
  </div>     
</div>

<?php include("includes/footer.php") ?>


