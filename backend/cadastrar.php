<?php
include('../env.php');

$con = new mysqli($DB_HOSTNAME .':'. $DB_PORT,$DB_USERNAME,$DB_PASSWORD ,$DB_DATABASE);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $tipo_foto = $_FILES['foto']['type'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);  
    if($tipo_foto){
      $foto = file_get_contents($_FILES['foto']['tmp_name']);      
      $stmt = $con->prepare("INSERT INTO Usuario (usuario,email,foto,tipo_foto, senha) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param("sssss",$usuario, $email,$foto,$tipo_foto, $senha);
    }else{
      $stmt = $con->prepare("INSERT INTO Usuario (usuario,email, senha) VALUES (?, ?, ?)");
      $stmt->bind_param("sss",$usuario, $email, $senha);
    }
    
    $stmt->execute();
    header("Location: ../login.php");
  }
?>