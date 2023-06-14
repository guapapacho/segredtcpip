<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];



$consulta="SELECT*FROM ususarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE ACCESO CONTACTA CON IT GRUPO6</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
