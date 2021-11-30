<?php
$con=mysqli_connect('localhost','root', '', 'examen') or die('error en la concexion del servidor');
$where = "";
if (!empty($_POST)) {
$valor = $_POST['campo'];
if (!empty($valor)) {
$where = "WHERE Nombre LIKE '%$valor%'";
    }
}

$sql = "SELECT `ID`, `Nombre`, `Matricula`, `Grupo`, `Correo`, `Contraseña`, `Comentario` FROM `registros` $where";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>BUSCADOR</title>
  <link rel="stylesheet" href="estilosT.css">
</head>

<body>
    <br>
        <h2>
            Registros
        </h2>
       <center><div class="row">
           <div class= "col batcol">
               <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
               <font color="white"><b>Nombre: </b></font><input class="ingreso" type="text" id="campo" name="campo" value=""/>
               <button class="btn-1" type="submit" name="Buscar" id="buscar"> <span><font color="white">Buscar</font></span></button>
</form>
</div>
</div></center>

<br>
    <div class="row tabla-reponsive">

        <CENTER><table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Correo</th>
                    <th>Comentario</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultado->fetch_array()){
                    ?>
                <tr>
                    <td><?php echo $row['ID'];?></td>
                    <td><?php echo $row['Nombre'];?></td>
                    <td><?php echo $row['Grupo'];?></td>
                    <td><?php echo $row['Correo'];?></td>
                    <td><?php echo $row['Comentario'];?></td>
                </tr>

                <?php  } ?>

            </tbody>
        </table></CENTER>

    </div>
</body>
</html>