
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Form Results</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="shopping.css">
    </head>

    <body>
        Name: <?php echo $_POST["name"];?><br>
        Email: <?php echo '<a href="mailto:' . $_POST["email"] . '>' . $_POST["email"] . '</a>'; ?><br>
        Major: <?php echo $_POST["major"];?><br>
        Comments: <?php echo $_POST["comment"];?><br>

    </body>

</html>
