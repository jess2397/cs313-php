<?php
session_start();

$things = array("Thing" => "thing.jpg", "Whatcha-macallit" => "what.jpg", "DoHicky" => "doo.jpg", "Stuff" => "stuff.jpg", "A Goober" => "goober.jpg", "Thingamajigger" => "jigger.jpg");
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
        foreach($things as $thing => $pic)
        {
            echo '<form class="browse" action="item.php" method="post">
            <img src="' . $pic . '"/>
            <input type="hidden" name="pic" value="' . $pic . '">
            <input type="hidden" name="item" value="' . $thing . '"><div class="thing">'  . $thing . '</div><input type="submit" value="Add"></form>';
        }
    ?>
    </div>
</main>
</div>
</body>

</html>
