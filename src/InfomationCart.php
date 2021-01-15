<?php
    session_start();
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h3>Infomation of Cart:</h3>
    <?php
        echo "<pre>";
        if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
            echo "<form action='UpdateCart.php' method='post'>";
            echo "<table border='1' width='600'>";
            echo "<tr>";
            echo "<td>Name</td>";
            echo "<td>Quantity</td>";
            // echo "<td>Size</td>";
            echo "<td>Price</td>";
            echo "<td>Total</td>";
            echo "<td></td>";
            echo "</tr>";
            foreach($_SESSION['cart'] as $list) {
                echo "<tr>";
                echo "<td>".$list['name']."</td>";
                echo "<td><input type='text' value='".$list['qty']."' name='qty[".$list['id']."]'/></td>";
                // echo "<td>".$list['size']."</td>";
                echo "<td>".number_format($list['price'])."</td>";
                echo "<td>".number_format($list['qty'] * $list['price'])."</td>";
                echo "<td><a href='DeleteCart.php?id=".$list['id']."' style='text-decoration: none; color: black;'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>
                <p align='right' style='width:600px'>
                <input type='submit' value='UPDATE' name='btnUpdate'/>
                </p>    
                ";
            echo "</form>";
        } else {
            echo "There is nothing in the cart.";
        }
    ?>
</body>
</html>
