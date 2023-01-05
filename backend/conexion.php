<?php
function retornarConexion() {
  $con=mysqli_connect("localhost","root","noMuestroMiContraseña","bd1");
  return $con;
}
?>