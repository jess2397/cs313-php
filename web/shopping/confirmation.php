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
            <header>
                <h1>Cart</h1>
                <a href="/shopping/cart.php">Back to Cart</a>

            </header>
            <main>
                <h1>Thanks for Shopping</h1>
                <p>You bought:</p>
                <ul>
                    <?php
                    foreach($_SESSION['items'] as $item)
                    {
                        echo '<li>' . $item.'</li>';
                    }
                    ?>
                </ul>

                <h2>It will be shipped to:</h2>
                <p>
                <?php
                    echo $_POST["lineOne"] . "<br>";
                    echo $_POST["lineTwo"] . "<br>";
                    echo $_POST["city"] . ", ";
                    echo $_POST["state"] . "<br>";
                    echo $_POST["zip"] . "<br>";
                    ?>

                </p>
            </main>
        </div>
    </body>

</html>
