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
           $d =date("d-");
          echo date("m-");
          $m = date("m-");
          echo $y =date("Y");

        ?>
      </a>
    </li>
  </ul>
</nav>
    <br>
  


<div class="container p-3" >
    <div class="row">
        <div class="col-md-8">
          <h1>Prestamos realizados el dia de hoy</h1>
              
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                      <th>Materia</th>
                      <th>Estudiante</th>
                        <th>Hr.Entrada</th>
                        <th>Hr.Salida</th>
                        <th>Hr. fecha actual</th>
                        
                        <th>Maestro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT materias.nombre_materia, usarios.nombre, prestamos.h_entrada, prestamos.h_salida, prestamos.h_actua, prestamos.maestro
                               FROM prestamos
                               INNER JOIN usarios ON usarios.id = prestamos.id_usuario
                               INNER JOIN materias ON materias.id_materia = prestamos.id_materia
                               WHERE YEAR(h_actua) = '$y' and MONTH(h_actua) = '$m' and DAY(h_actua) = '$d';";
                        $consuta= mysqli_query( $conn, $sql );
                        
                        while($row = mysqli_fetch_array($consuta) ){ ?>
                        <tr>
                            <td><?php echo $row['nombre_materia'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['h_entrada'] ?></td>
                            <td><?php echo $row['h_salida'] ?></td>
                            <td><?php echo $row['h_actua'] ?></td>
                            
                            <td><?php echo $row['maestro'] ?></td>
                            
                                                    </tr>

                        
                    <?php } ?>
                </tbody>

            </table>

        </div>

        <div class="col-md-8">
          <h1>Equipos existentes</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre del Equipo </th>
                        <th>Descripcion del Equipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sqle ="SELECT nombre_equipo, descripcio FROM  pc where  pres = 'D'";
                        $consutae= mysqli_query( $conn, $sqle );
                        
                        while($row = mysqli_fetch_array($consutae) ){ ?>
                        <tr>
                            <td><?php echo $row['nombre_equipo'] ?> </td>
                            <td><?php echo $row['descripcio'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>



</div>

<?php include("includes/footer.php") ?>
  