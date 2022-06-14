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

<div class="container p-4" class="text-center" >  

  <div  >
   <h1 class="text-center" >Facultad de Estadística e Informática  </h1>
   <br>
   <p class="text-center"> En la facultad de estadística e informática tenemos la misión de formar profesionistas
      socialmente responsables que contribuyan al desarrollo local, estatal y nacional, a través
      de la generación y aplicación del conocimiento y la extensión de los servicios, en las áreas 
      de estadística y de tecnologías de la información y comunicación ofreciendo programas 
      educativos reconocidos por su calidad nacional e internacional, en las áreas de estadística, 
      manejo y ciencias de datos, comunicaciones digitales, tecnologías emergentes de cómputo, redes
      y seguridad en cómputo, e ingeniería de software, con una planta docente comprometida con su
      superación profesional y altamente capacitada que prepara a sus alumnos en las competencias 
      requeridas por las empresas públicas y privadas así como gobierno en el ámbito regional, 
      acional e internacional, complementando e integrando en su formación valores morales y 
      conciencia sobre la sustentabilidad, medio ambiente y equidad de género, con egresados 
      líderes y competentes en sus respectivas disciplinas, propiciando el desarrollo económico 
      del país</p>
    <br>
      <img  class="text-center" src="img/fei.jpg" alt="logo" style="width:500px;">
    <br>
    <br>
    <h1 class="text-center"> Centro de cómputo </h1>
    <br>

    <p class="text-center">En el cetro de cómputo contamos con 4 aulas llamadas cc1 cc2 cc3 y cc4, todos los 
      equipos cuentan con dos sistemas operativos como son Windows y Linux, pero en el aula cc4 
      contamos con equipos Apple que cuentan con el sistema operativo de Apple y con Windows. 
      </p>
      <p class="text-center">Todos nuestros equipos cuentan además con el software necesario para que los estudiantes 
      puedan realizar sus prácticas o actividades como son lenguajes de programación como 
      Java o C++ y sistemas gestores de base de datos </p>
      <br>
      <br>
      <img  class="text-center"src="img/cc1234.png" alt="logo" style="width:900px;">
  </div>
  
</div>


  
</body>
</html>