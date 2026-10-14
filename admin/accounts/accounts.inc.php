<?php 
    if($_SESSION["userType"] === "Admin"){
        require_once '../includes/dbh.inc.php';
        require_once '../includes/config_session.inc.php';
        require_once 'accounts_model.inc.php';
        require_once 'accounts_control.inc.php';
        $_SESSION["usersnames"] = [];
        $_SESSION["an"] = accountnum($conn);
        $runs = 1;
        while($runs <= $_SESSION["an"]){
            $_SESSION["usersnames"][$runs] = getaccname($conn, $runs);
            $runs++;
        }
    } else {

    }
