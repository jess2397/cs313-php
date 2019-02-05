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




?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Fun "Facts" About Animals</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" type="text/css" href="main.css">-->

</head>

<body>
<div>
<header>
<h1>"Social Media"</h1>
<hr>
</header>
<main>
    <?php
    foreach ($db->query('SELECT * FROM post AS p
JOIN author AS a
ON p.author_id = a.id') as $row)
    {
        echo '<article>
<h2>' . $row['display_name'] . '</h2>
<p>' . $row['content'] . '</p>
<div class="date">'. $row['date'] . ' </div>
</article>';
    }
    ?>

</main>
</div>
</body>

</html>

