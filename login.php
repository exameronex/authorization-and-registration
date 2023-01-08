<?php
    session_start();
    
    $authError = false;

    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
		$password = $_POST['password'];

        require "model/loginModel.php";

        if (checkAuth($login, $password)) {
            $authError = true;            
        } else {
            $_SESSION['authFlash'] = true;
            $_SESSION['login'] = $login;            
            header('Location: ../');
        }
        

    }

    require "view/loginView.php";    
?>
