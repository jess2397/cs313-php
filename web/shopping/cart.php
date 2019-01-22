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
                foreach($things as $thing)
                {
                    echo '<form action="remove.php" method="post">
            <input type="hidden" name="item" value="' . $item . '"><div>'  . $item . '</div><input type="submit" value="Remove"></form>';
                }
                ?>

            </main>
        </div>
    </body>

</html>