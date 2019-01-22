<?php
    session_start();

if(!isset($_SESSION['items']))
{
    $_SESSION['items'] = array();
}
array_push($_SESSION['items'],$_POST["item"]);

    header('Location: /shopping/shopping.php');
?>

