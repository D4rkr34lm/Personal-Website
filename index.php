<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1> Manuel Frohn's personliche Webside</h1>
        <nav id="public-nav">
            <a>Publications</a>
            <a>Projects</a>
        </nav>
        <?php
            if($_SESSION["login"] == true) {
                echo 
                "<nav id='private-nav'>
                    <a>Taskmanager</a>
                </nav>";
            }
        ?>
    </body>
</html>