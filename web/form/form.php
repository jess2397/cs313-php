<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="shopping.css">
    </head>

    <body>
        <form action="results.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>\
            <h2>Major</h2>
            <input type="radio" name="major" value="CS"> Computer Science
            <input type="radio" name="major" value="CIT">Computer Information Technology
            <input type="radio" name="major" value="WDD"> Web Design and Development
            <input type="radio" name="major" value="CE"> Computer Engineering
            <input type="radio" name="major" value="SE"> Software Engineer

            Comments:
            <textarea name="comment"></textarea>

            <input type="submit">
        </form>
    </body>

</html>
