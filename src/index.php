<?php
session_start();
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Shopping Online</title>
</head>

<body>
    <div class="cart-icon">
        <span class="cart">
            <?php
            $total = 0;
            if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
                foreach ($_SESSION['cart'] as $list) {
                    $total += $list['qty'];
                }
            }
            ?>
            <a href="InfomationCart.php"><?php echo $total; ?></a>
        </span>
        <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
    </div>

    <div class="frame">
        <?php
        if (!is_null($product)) {
            foreach ($product as $row) {

        ?>
            <div class="product">
                <img src="<?php echo $row['image'] ?>" alt="" class="background">
                <div class="background-insert" onclick="Info(<?php echo $row['id'] ?>)"></div>
                <div class="layer-icon">
                    <a href='InfomationCart.php?id=<?php echo $row['id'] ?>'>
                        <p>BUY NOW</p>
                    </a>
                    <a href='InsertCart.php?id=<?php echo $row['id'] ?>'><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
                <div class="layer-big-text"><?php echo $row["name"] ?></div>
                <div class="layer-small-text">Price: <?php echo number_format($row["price"]) ?></div>
            </div>
        <?php
            }
        }
        ?>
    </div>

    <script>
        function Info(id) {
            window.location = "/InfomationProduct.php?id=" + id;
        }
    </script>
</body>

</html>