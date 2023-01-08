<?php
    session_start();

    $auth = false;

    if (isset($_SESSION['authFlash'])) {
		$auth = $_SESSION['authFlash'];
		unset($_SESSION['authFlash']);
	}

    if (isset($_SESSION['login'])) {
		$login = $_SESSION['login'];
	}
    
    require "view/indexView.php";
?>