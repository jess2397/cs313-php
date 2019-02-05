<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>
<div>
<header>
<h1>Login</h1>
<hr>
</header>
<main>
    <h2 style="<?php if($_GET["fail"] != 'true'){ echo 'display:none';}?>">Username or Password incorrect</h2>
    <form action="confirm.php" method="post">
        Username:
        <input type="text" name="username">
        Password:
        <input type="text" name="pass">
        <input type="submit" value="Login">
    </form>

</main>
</div>
</body>

</html>
