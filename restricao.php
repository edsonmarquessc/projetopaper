<?php

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pass'])) {

        include_once './php/conexao.php';
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM usuarios where email = '$email' and pass = '$pass'";
        $resut = $conexaousuario->query($sql);

        if(mysqli_num_rows($resut) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['pass']);
            header('Location: index.php');
        }
        else {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            header('Location: artigo.php');
        }
        
    }

    else {
        header('Location: index.php');
    }

?>