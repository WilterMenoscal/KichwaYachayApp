<?php
include 'conexion.php';
$name = $_POST['Fname'];
$lname = $_POST['Lname'];
$email = $_POST['Email'];
$password = $_POST['password'];
$course = $_POST['course'];


// $usu_name="Pepe";
// $usu_lname="Pancho";
// $name="Ric";
// $lname="Far";
// $email="ric@gmail.com";
// $password="wilter";
// $course="A1";

$sql = "INSERT INTO logreg(Fname,Lname,Email,password,course) VALUES ('$name','$lname','$email', '$password','$course')";

if ( mysqli_query($conexion, $sql) ) {
    $result["success"] = "1";
    $result["message"] = "success";

    echo json_encode($result);
    mysqli_close($conexion);

} else {

    $result["success"] = "0";
    $result["message"] = "error";

    echo json_encode($result);
    mysqli_close($conexion);
}

// $sentencia=$conexion->prepare("INSERT INTO logreg VALUES(?,?,?,?,?)");
// $sentencia->bind_param('sssss',$usu_name,$usu_lname,$usu_usuario,$usu_password,$usu_course);
// $sentencia->execute();
// // $resultado = $sentencia->get_result();

// // if ($fila = $resultado->fetch_assoc()) {
// //          echo 'DONE';     
// // }

// $sentencia->close();
// $conexion->close();
?>