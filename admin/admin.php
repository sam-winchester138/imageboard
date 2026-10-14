<?php
    include '../includes/dbh.inc.php';
    include '../includes/config_session.inc.php';
    if ($_SESSION["userType"] === "Admin"){
    } else {
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href = "../styles/astyle.css">
    </head>
    <body>
        <h1>Admin page</h3>
        <hr>
        <div class = "main">

            <div class = "container">
                <h3>accounts</h3>
                <a href="accounts.php">Accounts</a>
            </div>

            <div class = "container">
                <h3>posts</h3>
                <a href="posts.php">Posts</a>
            </div>

            <div class = "container">
                <h3>homepage</h3>
                <a href="../Homepage.php">homepage</a>
            </div>
        </div>
    </body>

</html>