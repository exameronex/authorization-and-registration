<?php    
    require "./bootstrap.php";

    function checkAuth($login, $password) {
        global $conn;

        $query = "SELECT * FROM Auth WHERE login = '$login'";
        $result = $conn->query($query);

        $user = mysqli_fetch_assoc($result);
        $hash = $user['password'];
        if (!empty($user) && password_verify($password, $hash)) {
            return false;
        } else {
            return true;
        }
    }
?>