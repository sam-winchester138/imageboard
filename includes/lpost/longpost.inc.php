<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/dbh.inc.php";
    require_once "includes/lpost/longpost_model.inc.php";
    require_once "includes/lpost/longpost_control.inc.php";
    $postID = htmlspecialchars($_GET["post"]);
    get_lpost($conn, $postID);
    list($_SESSION["lpost_title"], $_SESSION["lpost_username"], $_SESSION["lpost_contents"], $_SESSION["lpost_image"]) = get_lpost($conn, $postID);
