<?php
    session_start();
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
		$password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];

        require "model/registerModel.php";
        if (addAuth($login, $password, $birthday, $email, $confirm)) {
            $_SESSION['login'] = $login; 
            header('Location: ../');
        }
    }

    require "view/registerView.php";   
?>