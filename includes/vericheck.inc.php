<?php
    require_once 'config_session.inc.php';
    if($_SESSION["veri"] === true){

    }else{
        header("Location: ../sessionend.php");
    }