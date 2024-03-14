<?php
include('env.php');
$con = new mysqli($DB_HOSTNAME .':'. $DB_PORT,$DB_USERNAME,$DB_PASSWORD ,$DB_DATABASE);
session_start();
function buscarCredenciais($email, $senha, $con){

    $query = "SELECT usuario,email,foto,tipo_foto,senha FROM Usuario WHERE email = ? LIMIT 1";
    $stmt = $con->prepare($query);

    if ($stmt === false) {
        return false;
    }

    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            if (password_verify($senha, $row['senha'])) {
                $usuario = [
                    'usuario' => $row['usuario'],
                    'email' => $row['email'],
                    'foto' => $row['foto'],
                    'tipo_foto' => $row['tipo_foto']
                ];
                return $usuario;
            } else {
                false;
            }
        }
    }

    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $usuario = buscarCredenciais($email, $senha, $con);
    if ($usuario) {
        $_SESSION['usuario_logado'] = true;
        $_SESSION['usuario_nome'] = $usuario['usuario'];
        $_SESSION['usuario_email'] = $usuario['email'];
        $_SESSION['usuario_foto'] = $usuario['foto'];
        $_SESSION['usuario_tipo_foto'] = $usuario['tipo_foto'];
        header("Location: index.php");

    } else {
        header("Location: login.php?http=404");

    }
}



?>