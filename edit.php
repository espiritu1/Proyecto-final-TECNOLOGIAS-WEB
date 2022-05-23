<?php
  include("db.php");

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
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $matricula = $_POST['matricula'];
  $carrera = $_POST['carrera'];
  $id_rol = $_POST['id_rol'];
  $pass= $_POST['pass'];
  

  $query = "UPDATE  usarios set matricula = '$matricula', carrera = '$carrera', nombre = '$nombre' , id_rol = '$id_rol' , pass = '$pass' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Se actualizaron los datos correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: admin.php');
  }
?>


<?php



?>
<?php include('includes/header.php'); ?>

<div class="container p-4">
<h1> En esta pagina puedes actualizar tus datos</h1>
<div class="row">

<div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <div class="form-group">
        <input type="text" name="nombre" value="<?php echo $nombre; ?>"  class ="form-control" placeholder="Nombre" >
      </div>
        
      <div class="form-group">
          <input type="text" name="matricula"  value="<?php echo $matricula; ?>" class="form-control" placeholder="Matricula">
        </div>
        
         <div class="form-group">
            <select class="form-group" name="carrera" id=""   >
            <option value="<?php echo $carrera; ?>"><?php echo $carrera; ?></option>
            <option value="Ingenieria de Software">Igenieria de Software</option>
            <option value="Tecnologia Computacionales ">Tecnologia Computacionales</option>
            <option value="Redes y algo mas">Redes</option></select>
          </div>


             <div class="form-group">
            <select class="form-group" name="id_rol" id=""   >
            <option value="<?php echo $id_rol; ?>"><?php echo $id_rol; ?></option>
            <option value="1">Admin</option>
            <option value="2 ">Maestro</option>
            <option value="3">Estudiante</option></select>
          </div>


           

            <div class="form-group" >
            
            <!--<input type="radio" name="genero" value="mujer"  /> <label for="">Mujer.     </label>
              <input type="radio" name="genero" value="hombre" /> <label for="">Hombre.   </label>
              <input type="radio" name="genero" value="otro" /><label for="">Otro. </label>-->

              
              
          


            
            </div>

            <div class="form-group">
                <input type="text" name="pass"value="<?php echo $pass; ?>" class ="form-control" placeholder="Password" autofocus>
            </div>


        <button class="btn btn-success" name="update">
          Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
