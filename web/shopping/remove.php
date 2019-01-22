<?php
session_start();

$_SESSION['items'] = array_diff($arr, $_POST["item"]);

header('Location: /shopping/cart.php');
?>
