<?php
session_start();

try
{
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
    echo 'Error!: ' . $ex->getMessage();
    die();
}
$user = $_POST['username'];

$row = $db->query("SELECT username, password FROM author WHERE username = '".$user."'");

if($_POST["pass"] == $row["password"])
{
    $_SESSION['user'] = $row["display_name"];
    header('Location: /social/social.php');

}
else{
    header('Location: /social/login.php?fail=true');
}

?>
