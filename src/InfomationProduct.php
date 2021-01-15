<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <title>Product</title>
</head>
<body>

<?php 
    session_start();
    require_once('connect.php');

    if (!is_null($product)) {
        foreach($product as $row) {
            if ($row['id'] == $_GET['id']) {
            ?>
                <div class="text-block">
                    <div class="text-block-left">
                        <img src="<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="text-block-right">
                        <h1>
                            <?php echo $row["name"] ?>
                        </h1>
                        <h3>
                            <?php echo number_format($row["price"])." VND"; ?>
                        </h3>
                        <p>
                            <?php echo $row["detail"] ?>
                        </p>
                        
                        <form action="InfomationCart.php" method="post">
                            <p>Size</p>
                            <div>
                                <select name="size">
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                </select>
                            </div>
                            <a href='InsertCart.php?id=<?php echo $row['id'] ?>'> Add to Cart </a>
                            <button type="submit">BUY NOW</button>
                        </form>
                    </div>
                </div>
<?php
            }
        }
    }

?>

</body>
</html>
           

        
