<?php 
include("libraries\GLIB.php");
include("libraries\debug.php");

use glib\database;

//$data = new database ("localhost", "root", "", "testlib");
//database::show("test");
//$data->data_create("users", "username, password", "'justin', 'guiriba2'");

?>

<html>
    <head>
        <title>
            TEST LIBRARY2
        </title>
        <link rel="stylesheet" type="text/css" href="views\css\styles.css">
    </head>
    <body>
        <section>
            <div class="loginform-container">
                <h3 class="login-text">Login</h3>
                <hr>
                <form class="semi-cont" method="post">
                    <div class="labels">
                        <label>Username:</label><br>
                        <input type="text">
                    </div>

                    <div class="labels">
                        <label>Password:</label><br>
                        <input type="password">
                    </div>
                    <input type="submit">
                    <a href="/home">home</a>
                </form>
            </div>
        </section>
    </body>
</html>