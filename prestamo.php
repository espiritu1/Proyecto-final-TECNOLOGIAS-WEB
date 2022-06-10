<?php 
include("db.php");
$username = $_SESSION['username'];



if  (isset($_GET['id'])) {  
    $id = $_GET['id'];
    $query = "SELECT * FROM usarios WHERE id=$id";
    $result = mysqli_query($conn, $query);
  
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        
        $nombre = $row['nombre'];
        $matricula = $row['matricula'];
        $carrera = $row['carrera'];
        $id_rol = $row['id_rol'];
        $pass = $row['pass'];    
    }
  }

  if (isset($_POST['update'])) {
  
    $h_entrada = $_POST['h_entrada'];
    $id_materia = $_POST['id_materia'];
    $id_usuario = $_POST['id_usuario'];
    $id_equipo = $_POST['id_equipo'];
    $motivo_pres = $_POST['motivo_pres'];
    $h_salida = $_POST['h_salida'];
    $maestro = $_POST['maestro'];
    
    

    $query = "INSERT INTO prestamos (h_entrada, id_materia, id_usuario, id_equipo, motivo_pres, h_salida, maestro )
    VALUES('$h_entrada','$id_materia','$id_usuario','$id_equipo','$motivo_pres','$h_salida','$maestro' )";
    mysqli_query($conn, $query);
  
    $_SESSION['message'] = 'Se realizo el pedodo exitosamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: estudiante.php');
    
  }


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
      <a class="nav-link" href="nosotros.php ">Acerca de nosotros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Registro.php">Registro de solicitud</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="prestamos.php">lista de usuarios que ha solicitado prestamos</a>
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













<div class="container p-4" > 
    <div class="row">
      <div class="col-md-4 mx.auto">
        <div class="card card-body">
          <h3>Solicitar prestamo</h3>

          <form action="prestamo.php" method="POST">

            <div class="form-group">


                <input type="text" name="id_usuario" value="<?php echo $id; ?>"  
                    tabindex="" alt="ingresa tu nombre de estudiante" class ="form-control" 
                    placeholder="Nombre del estudiante"  required autofocus> <?php echo $nombre; ?>
            </div>

            <!-- 
            <div class="form-group">
              (se eliminaron por qeu no son necesarias para el prestamo  )


                  <input type="text" name="matricula" value="<?php echo $matricula; ?>"
                    tabindex="" alt=" ingresa tu matricula" class ="form-control" 
                    placeholder="Matricula" required >
            </div>

              <div class="form-group">
                <select class="form-group" name="carrera" id=""   >
                <option value="<?php echo $carrera; ?>"><?php echo $carrera; ?></option>
                <option value="Ingenieria de Software">Igenieria de Software</option>
                <option value="Tecnologia Computacionales ">Tecnologia Computacionales</option>
                <option value="Redes">Redes</option></select>
            </div>-->
          

            <div class="form-group">
              <strong><p >Hora de entrada</p></strong>
                <input type="time" value="07:00" name="h_entrada"  tabindex="" 
                alt=" ingresa tu hora en entrada " class ="form-control" placeholder="hora entrda" required >
            </div>

            <div class="form-group">
              <strong><p >Hora de Salida</p></strong>
                <input type="time" value="21:00" name="h_salida"  tabindex="" 
                alt=" ingresa tu hora de salida" class ="form-control" placeholder="hora entrada" required >
               
            </div>

            <div class="form-group">
                <strong><p for=""> materia</p></strong>
                <select lass="form-group" name="id_materia" id="" tabindex="" alt=" ingresa el nmobre de la materia " 
                class ="form-control" placeholder="Materia" required  >
                <?php 
                $queryMAT = "SELECT id_materia, nombre_materia FROM materias ";
                $resultMAT = mysqli_query($conn, $queryMAT );
                while($row = mysqli_fetch_array ($resultMAT)){?>
                <option value="<?php echo $row['id_materia'] ?>"><?php echo $row['nombre_materia'] ?></option>
                  <?php }?>
                 </select>
            </div>

            <div class="form-group">
              <strong> <p >Selecciona el <u>Nombre del Equipo</u>  que se ajuste a tus necesidades con la Descripcion del Equipo </p></strong>
              <select lass="form-group" name="id_equipo" id="" tabindex="" alt="eleje un pc"  class ="form-control" placeholder="" required>
                <?php 
                  $queryPC = "SELECT id_equipo, nombre_equipo FROM pc where pres= 'D' ";
                  $resultPC = mysqli_query($conn, $queryPC );
                  while($row = mysqli_fetch_array ($resultPC)){?>
                  <option value="<?php echo $row['id_equipo'] ?>"><?php echo $row['nombre_equipo'] ?></option>
                <?php }?>
              </select>
            </div>

            <div class="form-group">
              <strong><label for="">Profesor</label></strong>
              <select lass="form-group" name="maestro" id="" tabindex="" alt=" ingresa elnombre del maestro  " class ="form-control" placeholder="maestro" required  >
                <?php 
                  $queryPROF = "SELECT id_rol ,nombre  FROM usarios WHERE id_rol= 2 ";
                  $resultPROF = mysqli_query($conn, $queryPROF );
                  while($row = mysqli_fetch_array ($resultPROF)){?>
                  <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                <?php }?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="motivo_pres" value=""  
                  tabindex="" alt="Objetivo del prestamos" class ="form-control" 
                  placeholder="Objetivo del prestamos"  required autofocus>
            </div>

            <button class="btn btn-success" name="update"> Solicitar  </button>
          </form>
        </div>
      </div>






      <div class="col-md-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><u>Nombre del Equipo</u> </th>
                        <th>Descripcion del Equipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sqle ="SELECT nombre_equipo, descripcio FROM  pc where  pres = 'D'";
                        $consutae= mysqli_query( $conn, $sqle );
                        
                        while($row = mysqli_fetch_array($consutae) ){ ?>
                        <tr>
                            <td><strong><?php echo $row['nombre_equipo'] ?></strong> </td>
                            <td><?php echo $row['descripcio'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>

