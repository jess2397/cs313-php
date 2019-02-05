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

class Post {

    /* Member variables */
    var $authorName;
    var $content;
    var $date;

    /* Member functions */
    function setAuthor($name){
        $this->authorName = $name;
    }
    function getAuthor(){
        echo $this->authorName;
    }

    function setContent($content){
        $this->content = $content;
    }
    function getContent(){
        echo $this->content;
    }

    function setDate($date){
        $this->date = $date;
    }
    function getDate(){
        echo $this->date;
    }
}

    $posts = array();

    $posts = new Post;




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
    foreach($posts as $p)
    {
        echo '<article>
<h2>' . $p->getAuthor(). '</h2>
<p>' . $p->getContent(). '</p>
<div class="date">'. $p->getDate(). ' </div>
</article>'
    }
    ?>

</main>
</div>
</body>

</html>

