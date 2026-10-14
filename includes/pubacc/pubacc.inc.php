<?php

    //include_once 'config_session.inc.php';

    require_once 'includes/dbh.inc.php';

    require_once 'pubacc_model.inc.php';

    require_once 'pubacc_control.inc.php';

    require_once 'includes/img/imgm.inc.php';

    $account = $_GET["account"];

    //$_SESSION["pubacc_postID"] = [];

    $_SESSION["pubacc_account"] = $account;

    $_SESSION["pubacc_title"] = [];

    $_SESSION["pubacc_content"] = [];

    $_SESSION["pubacc_image"] = [];

    $_SESSION["pubacc_count"] = get_num_posts($conn, $account);

    //echo 

    $postID = [];

    $postID = get_postIDs($conn, $account);

    function getimage($conn){
        global $account;
        $img = get_image($conn, $account);
        $title = "<img style = height:70px; src = 'images/" . $img . "'>";
        echo $title;
    }

    //

    for ($sn = 1; $sn <= $_SESSION["pubacc_count"]; $sn++) {

        list($_SESSION["pubacc_title"][$sn],$_SESSION["pubacc_content"][$sn]) = get_post($conn, $account, $postID[$sn]);

    }



