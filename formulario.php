<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>Untitled Document</title>
 <link rel="stylesheet" href="Estilo.css">
</head>
<body>
<form class="formulario"  method="POST">
       <p class="separador"><img src="http://assets.stickpng.com/images/58469c62cef1014c0b5e47f6.png" width="125" height="125" alt="" class="imagen"/></p>
    <div class="contenedor"> 
    <div class="input-contenedor"> 
      <input type="text" name="Nombre" placeholder="Nombre completo:">
    </div><div class="input-contenedor"> 
      <input type="text" name="Matricula" placeholder="Matricula:">
    </div><div class="input-contenedor"> 
      <input type="text" name="Grupo" placeholder="Grupo:">
    </div>
    <div class="input-contenedor"> 
      <input type="email" name="Correo" placeholder="Correo electronico:">
    </div>
    <div class="input-contenedor"> 
      <input type="password" name="Contraseña" placeholder="Constraseña:">
    </div>
    <div class="input-contenedor"> 
      <input type="text" name="Comentario" placeholder="Comentario:">
    </div>
      <input type="submit" name="registrar" value="Registrate" class="button">
        <p>Ya te registraste? <button class="link" type="reset" onclick="window.open('tabla.php')">Buscar</button></p>
        <p>Quieres eliminar tu cuenta? <button class="link" type="reset">Eliminar</button></p>
    </div>
</form>
<?php
  error_reporting(0);
 $con=mysqli_connect('localhost','root','','examen') or die ('error en la conexion con el servidor');

 $sql="INSERT INTO registros VALUES(NULL,'".$_POST['Nombre']."','".$_POST['Matricula']."','".$_POST['Grupo']."','".$_POST['Correo']."','".$_POST['Contraseña']."','".$_POST['Comentario']."')";
  
$resultado=mysqli_query($con,$sql) or die ('error en la query database');

 mysqli_close($con);
?>
</body>
</html>
