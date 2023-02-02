<?php
$hostname='localhost';
$database='kichwaapp';
$username='root';
$password='12345678';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>