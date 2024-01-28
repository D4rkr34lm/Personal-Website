<?php
    session_start();
    $_SESSION["login"] = false;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Manuel Frohn's Webside</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header>
            <h1>Manuel Frohn's Webside</h1>
            <nav id="public-nav">
                <a>Publications</a>
                <a>Projects</a>
            </nav>
            <?php
                if($_SESSION["login"]) {
                    echo 
                    "<nav id='private-nav'>
                        <a>Taskmanager</a>
                    </nav>";
                }
            ?>
        </header>
        <div id="main-content">

        </div>
        <footer>
            
        </footer>
    </body>
</html>