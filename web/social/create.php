<?php
session_start();

require('dbConnect.php');

$db = dbConnect();

$display = filter_input(INPUT_POST, 'display', FILTER_SANITIZE_SPECIAL_CHARS);
$user = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);

try
{
    $query = 'INSERT INTO author(username, password, display_name) VALUES(:username, :password, :display_name)';
    $statement = $db->prepare($query);
    // Now we bind the values to the placeholders. This does some nice things
    // including sanitizing the input with regard to sql commands.
    $statement->bindValue(':username', $user);
    $statement->bindValue(':password', $pass);
    $statement->bindValue(':display_name', $display);
    $statement->execute();

}
catch (Exception $ex)
{
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Error with DB. Details: $ex";
    die();
}
header("location: login.php");
?>
