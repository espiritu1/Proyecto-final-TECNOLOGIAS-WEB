<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nosotros</title>
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
      
    </li>
    <li class="nav-item">
      <a class="nav-link" >             </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" >              </a>
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

<div class="container p-4" > 

  <div class="col-md-10">
   <h1>Facultad de Estadística e Informática  </h1>
   <br>
   <p> En la facultad de estadística e informática tenemos la misión de formar profesionistas
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
      <img src="img/fei.jpg" alt="logo" style="width:500px;">
    <br>
    <br>
    <h1>Centro de cómputo </h1>
    <br>

    <p>En el cetro de cómputo contamos con 4 aulas llamadas cc1 cc2 cc3 y cc4, todos los 
      equipos cuentan con dos sistemas operativos como son Windows y Linux, pero en el aula cc4 
      contamos con equipos Apple que cuentan con el sistema operativo de Apple y con Windows. 
      </p>
      <p>Todos nuestros equipos cuentan además con el software necesario para que los estudiantes 
      puedan realizar sus prácticas o actividades como son lenguajes de programación como 
      Java o C++ y sistemas gestores de base de datos </p>
      <br>
      <br>
      <img src="img/cc1234.png" alt="logo" style="width:900px;">
  </div>
  
</div>


  
</body>
</html>