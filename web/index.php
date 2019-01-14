<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fun "Facts" About Animals</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="main.css">

    </head>

    <body>
        <div>
            <header>
                <h1>Fun "Facts" About Animals</h1>
                <hr>
                <nav>
                    <ul>
                        <li><a href="#">Assignments</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <article>
                    <section class="post-content">
                        <h2>Mantis Shrimp</h2>
                        <figure>
                            <a href='index.php?hello=true'><img src="mantis.jpg" alt="A Mantis Shrimp"></a>
                        </figure>
                        <p><a href="#"></a></p>
                    </section>
                </article>

                <article>
                    <section class="post-content">
                        <h2>Maned Wolf</h2>
                        <figure>
                            <a href='index.php?hello=true'>
                                <img src="manedWolf.jpg" alt="Maned Wolf"></a>
                        </figure>
                        <p><a href="#"></a></p>
                    </section>
                </article>

                <article>
                    <section class="post-content">
                        <h2>Bearded Vulture</h2>
                        <figure>
                            <a href='index.php?hello=true'><img src="bearded.jpg" alt="Bearded Vulture">
                            </a>

                        </figure>
                        <p><a href="#"></a></p>
                    </section>
                </article>

                <article>
                    <section class="post-content">
                        <h2>Red Panda</h2>
                        <figure>
                            <a href='index.php?hello=true'>
                                <img src="panda.jpg" alt="Red Panda"></a>
                        </figure>
                        <p><a href="#"></a></p>
                    </section>
                </article>
            </main>
        </div>
    </body>

</html>

<?php
function runMyFunction() {
    $myfile = fopen("whoDoneIt.txt", "a") or die("Unable to open file!");
    $txt = $_SERVER['REMOTE_ADDR'];
    $txt .= "    ";
    $txt .= date('m/d/Y h:i:s a', time());
    $txt.= "\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    echo '<p id="warning">Please Do Not Touch the Animals! You have been recorded. Back Away Slowly.</p>';
}

if (isset($_GET['hello'])) {
    runMyFunction();
}
?>
