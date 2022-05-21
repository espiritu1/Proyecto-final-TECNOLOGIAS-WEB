<body>
  
</body>
</html>
<?php
 include("db.php");
  include('includes/header.php'); 
 

$nombre = $_POST['nombre'];
$pass = $_POST['pass'];

$sql ="SELECT * FROM usarios  where nombre = '$nombre' and pass='$pass'";

$consulta = mysqli_query( $conn, $sql );



$array = mysqli_fetch_array($consulta);

if($array!=null){
  switch($array['id_rol']){
      case 1:
        $_SESSION['username'] = $nombre; 
        header ("location: admin.php");
      break;
      case 2:
        $_SESSION['username'] = $nombre; 
        header ("location: maestro.php");
      break;
      case 3:
        $_SESSION['username'] = $nombre; 
        header ("location: estudiante.php");
      break;
      default:
    }
}else{
     echo "<div class='col-md-4 mx-auto'>";
    
      echo"<div class='card card-body'>";
    

      echo"<br>";
      echo" <h1>DATOS INCORRECTOS</h1> ";
      echo" <h2>por favor varifique sus datos usuario y contraseña ya que son incorrectos</h2> ";
      echo"<br>";
      
      echo"<br>";
      echo"<br>";
      echo "<a tabindex='2' alt='ir a la pagian de crear una cuenta' href=' registrarse.php'>crear una cuenta </a>";
      
      echo "<a tabindex='3' alt='volver a pagina para logearme' href=' login.php'>volver a login </a>";
      echo "</div>";
      echo "</div>";
}
    




?>

 