

<?php include("includes/header.php");
include("db.php"); ?>
  
<div class="container p-3" >
    <div class="row">
        

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

  
</body>
</html>