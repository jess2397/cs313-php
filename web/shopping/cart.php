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
                <?php
                foreach($_SESSION['items'] as $item)
                {
                    echo '<form action="remove.php" method="post">
            <input type="hidden" name="item" value="' . $item . '"><div>'  . $item . '</div><input type="submit" value="Remove"></form>';
                }
                ?>

                <br><a href="/shopping/checkout.php">Checkout</a>

            </main>
        </div>
    </body>

</html>
