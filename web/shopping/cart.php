<?php
session_start();
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Shopping</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="shopping.css">
    </head>

    <body>
        <div>
            <?php include 'header.php';?>
            <main>
                <h2>Cart</h2>
                <div class="shop">
                <?php
                foreach($_SESSION['items'] as $item)
                {
                    echo '<form class="cart" action="remove.php" method="post">
            <input type="hidden" name="item" value="' . $item . '"><div class="cartItem">'  . $item . '</div><input type="submit" value="Remove"></form>';
                }
                ?>
                </div>
                <br><a href="/shopping/checkout.php">Checkout</a>

            </main>
        </div>
    </body>

</html>
