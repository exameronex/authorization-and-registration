<?php
    require "./bootstrap.php";

    function addAuth($login, $password, $birthday, $email, $confirm) {
        global $conn;

        if ($password == $confirm) {
            $query = "SELECT * FROM Auth WHERE login='$login'";
		    $user = mysqli_fetch_assoc($conn->query($query));
            if (empty($user)) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO Auth (login, password, birthday, email, date_auth) VALUES ('$login', '$password', '$birthday', '$email', CURRENT_DATE)";
                $conn->query($query);    
                return true;
            } else {
                echo "Логин занят";
            }   
		} else {
			echo "Пароли не совпадают";
		}

    }
?>