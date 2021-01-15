<?php
    $host_name = "mysql";
    $db_name = "shopping_online";
    $user_name = "root";
    $password = "123123";
    $product = null;

    try {
        $conn = new PDO ("mysql:host=".$host_name.";dbname=".$db_name, $user_name, $password);
        $stmt = $conn->prepare("select * from product");
        $stmt->execute();
        $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
