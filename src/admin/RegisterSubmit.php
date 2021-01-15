<?php
    require_once('../connect.php');
    if (!isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['re-password']) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['re-password'];

        if ($password != $repassword) {
            header('Location: register.php');
        }

        if ($user['username'] = $username) {
            echo "1";
        } else {
            echo "0";
        }
    } else {
        header('Location: register.php');
    }
?>