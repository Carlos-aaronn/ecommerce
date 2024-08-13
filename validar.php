<?php
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['correo'] = $correo;
include('conexion.php');
$consulta="SELECT*FROM usuarios WHERE usuario='$correo' AND pass = '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
    echo "<script>alert('Aquí estoy')</script>";
    header("location: somos.php");
}else{
    ?>
    <?php 
    echo "<script>alert('Entre mal')</script>";
    include("login.php");
    echo "<script>alert('Datos incorrectos, intentalo de nuevo por favor !')</script>";
    exit();
}
mysqli_free_result($resultado);
mysqli_close($conexion);