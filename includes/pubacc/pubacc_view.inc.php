<?php
    function show_name(){
        $account = $_SESSION["pubacc_account"];
        echo $account;
    }
    $account = $_SESSION["pubacc_account"];
    function show_posts(){
        //$_SESSION["pubacc_postID"];
        $account = $_SESSION["pubacc_account"];
        $count = $_SESSION["pubacc_count"];
        //echo $count . "?";
        for ($sn = $_SESSION["pubacc_count"]; $sn >= 1; $sn--) {
            $title = $_SESSION["pubacc_title"][$sn];
            $contents = $_SESSION["pubacc_content"][$sn];
            echo "<div class = 'pub'>";
            echo "<h3>$title</h3>";
            echo "<h4>by $account</h4>";
            echo "<p>$contents</p>";
            echo "</div>";
        }
    
    }