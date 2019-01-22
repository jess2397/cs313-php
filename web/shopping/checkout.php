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

                <ul>
                <?php
                foreach($_SESSION['items'] as $item)
                {
                    echo '<li>' . $item.'</li>';
                }
                ?>
                </ul>

                <form action="confirmation.php" method="post">
                    Line one:
                    <input type="text" name="lineOne">
                    Line two:
                    <input type="text" name="lineTwo">
                    City:
                    <input type="text" name="city">
                    State:
                    <input type="text" name="state">
                    Zip Code:
                    <input type="text" name="zip">
                    <input type="submit" value="Checkout">
                </form>
            </main>
        </div>
    </body>

</html>
