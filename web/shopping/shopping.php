<?php
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
<header>
<h1><a href="#">Thinga-ma-bobs and Stuff</a></h1>
<a href="#">Shopping Cart</a>

</header>
<main>

    <?php
        foreach($things as $thing)
        {
            echo '<form action="set.php" method="post">
            <input type="hidden" name="item" value="' . $thing . '"><div>'  . $thing . '</div><input type="submit"></form>';
        }
    ?>

</main>
</div>
</body>

</html>
