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
      <a class="nav-link" href="prestamos.php">lista de usuarios</a>
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
        



        <div class="col-md-8"> 
          <h1>Lista de usuarios</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>carrra</th>
                        <th>Materia</th>
                        <th>Maestro</th>
                        

                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT usarios.nombre, usarios.carrera,  materias.nombre_materia, prestamos.maestro
                               FROM prestamos
                               INNER JOIN usarios ON usarios.id = prestamos.id_usuario
                              INNER JOIN materias ON materias.id_materia = prestamos.id_materia;";
                        $consuta= mysqli_query( $conn, $sql );
                        
                        while($row = mysqli_fetch_array($consuta) ){ ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['carrera'] ?></td>
                            <td><?php echo $row['nombre_materia'] ?></td>
                            <td><?php echo $row['maestro'] ?></td>
                            
                                                    </tr>

                        
                    <?php } ?>
                </tbody>

            </table>

        </div>

    </div>



</div>

<?php include("includes/footer.php") ?>