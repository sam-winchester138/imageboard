<?php

    @include_once "../dbh.inc.php";

    @require_once "posts_model.inc.php";

    $_SESSION["runs"] = amount_posts($conn);

    $_SESSION["count"] =  $_SESSION["runs"];

    $_SESSION["title"] = [];

    $_SESSION["post_username"] = [];

    $_SESSION["content"] = [];

    $_SESSION["postType"] = [];

    $_SESSION["postID"] = [];

    $_SESSION["pimage"] = [];
    $username = htmlspecialchars($_SESSION["username"]);
    $aname = 1;

    while ($_SESSION["count"] >= 0) {

        list($_SESSION["title"][$aname], $_SESSION["post_username"][$aname], $_SESSION["content"][$aname], $_SESSION["postType"][$aname], $_SESSION["postID"][$aname], $_SESSION["pimage"][$aname]) = get_posts($conn, $_SESSION["count"]);

        $aname++;

        $_SESSION["count"]--;

    }