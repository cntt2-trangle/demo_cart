<!-- <!-- <?php
    echo "<ul>";
    if (!is_null($product)) {
        foreach ($product as $row) {
    ?>
        <li style="display: flex;">
            <a href='InfomationProduct.php?id=<?php echo $row['id'] ?> ' style="min-width: 300px; width: 300px">
                <img src="<?php echo $row['image'] ?>" alt="">
            </a>
            <div style="margin-left: 20px;">
                <h3> <?php echo $row["name"] ?></h3>
                <p>Price: <?php echo number_format($row["price"]) ?></p>
                <a href='InsertCart.php?id=<?php echo $row['id'] ?>'><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i></a>
            </div>
        </li>
    <?php
        }
    }

    echo "</ul>";

    ?> -->


    <!-- <h3>List product:</h3>
    <!-- <p>
        <?php
        $total = 0;
        if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
            foreach ($_SESSION['cart'] as $list) {
                $total += $list['qty'];
            }
        }
        ?>
        There is <a href="InfomationCart.php"><?php echo $total; ?></a> product(s) in the cart.
    </p> --> -->
    <p>
    <?php
        $total = 0;
        if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
            foreach ($_SESSION['cart'] as $list) {
                $total += $list['qty'];
            }
        }
        ?>
        There is <a href="InfomationCart.php"><?php echo $total; ?></a> product(s) in the cart.
    </p> -->

    <!-- <style>
        ul {
            padding: 0px;
            margin: 0px;
            list-style: none;
            display: flex;
        }

        ul li {
            position: relative;
            width: 400px;
            border: 1px dashed #ccc;
            padding: 5px;
        }

        ul li h3 {
            font-size: 20px;
        }

        ul li a {
            text-decoration: none;
            color: #000;
        }

        ul li a:hover {
            color: #8F3A84;
        }

        ul li img {
            width: 100%;
        }

        li div a {
            display: block;
            text-align: center;
            color: white;
            border-radius: 5px;
            background: #ff99ff;
        }

        li div a:hover {
            color: #990099;
        }
    </style> -->