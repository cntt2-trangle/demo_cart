<?php
    session_start();
    include('connect.php');
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    header('Location: InfomationCart.php');
?>