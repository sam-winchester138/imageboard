<?php

    require_once '../../includes/config_session.inc.php';

    require_once '../../includes/dbh.inc.php';

    require_once 'del_model.inc.php';

    require_once 'del_control.inc.php';

    if($_SESSION["userType"] === "Admin" && $_SESSION["veri"] === true){

        $username = $_GET["username"];

        del($conn, $username);
        header("Location: ../../admin/accounts.php");

    } else {

        header("Location: ../../index.php");

    }