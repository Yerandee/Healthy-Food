<?php
$conexion = new  mysqli_connect("localhost", "root@localhost", "","login_register_db");
 
if ($conexion){
 alert("conectado"); 
    
}else{
  alert("no conectado");
}
?>
