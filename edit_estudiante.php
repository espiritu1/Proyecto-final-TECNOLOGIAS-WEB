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
  //$nombre = $_POST['nombre'];
 // $matricula = $_POST['matricula'];
 // $carrera = $_POST['carrera'];
  //$id_rol = $_POST['id_rol'];
  $pass= $_POST['pass'];
  

  $query = "UPDATE  usarios set  pass = '$pass' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Se actualizaron los datos correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: estudiante.php');
  }
?>


<?php



?>
<?php include('includes/header.php'); ?>

<div class="container p-4">
<h1> En esta pagina puedes modificar solo tu contraseña</h1>
<div class="row">

<div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_estudiante.php?id=<?php echo $_GET['id']; ?>" method="POST">

      

            <div class="form-group">
              <strong><label  for="">contraseña </label></strong>
              
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