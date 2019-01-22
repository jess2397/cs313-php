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
                <h1><a href="#">Cart</a></h1>
                <a href="#">Browse</a>

            </header>
            <main>

                <?php
                foreach($_SESSION['items'] as $item)
                {
                    echo $item . "<br>";
                }
                ?>

            </main>
        </div>
    </body>

</html>
