<?php
session_start();

foreach ($db->query('SELECT username, password FROM author WHERE username= ' . $_POST['username']) as $row)
{
    echo 'user: ' . $row['username'];
    echo ' password: ' . $row['password'];
    echo '<br/>';
}


?>
