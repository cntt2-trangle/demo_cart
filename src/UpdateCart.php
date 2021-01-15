<?php
    session_start();
    include('connect.php');
    $_SESSION['cart'];
    if (isset($_POST['btnUpdate'])) {
        foreach($_POST['qty'] as $key=>$value) {
            if ($value <= 0) {
                unset($_SESSION['cart'][$key]);
            } else {
                $_SESSION['cart'][$key]['qty'] = $value;
            }
        }
    }
    header('Location: InfomationCart.php');
?>