<?php
session_start();

$things = array("Thing", "Whatcha-macallit", "DoHicky", "Stuff", "A Goober", "Chattel");
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

    <h2>Browse</h2>
    <div class="shop">
    <?php
        foreach($things as $thing)
        {
            echo '<form class="browse" action="set.php" method="post">
            <input type="hidden" name="item" value="' . $thing . '"><div>'  . $thing . '</div><input type="submit" value="Add"></form>';
        }
    ?>
    </div>
</main>
</div>
</body>

</html>
