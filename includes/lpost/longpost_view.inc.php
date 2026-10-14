<?php
    function showtitle(){
        $username = $_SESSION['lpost_username'];
        echo "<title> $username's post</title>";
    }
    function showposts(){
        $title = $_SESSION['lpost_title'];
        $pimage = $_SESSION["lpost_image"];
        $username = $_SESSION['lpost_username'];
        $contents = $_SESSION['lpost_contents'];
        echo "<h3 class='npc'>$title</h3>";
        echo "<img src ='images/$pimage' style = 'height: 200px;'>";
        echo  "<a href=user.php?account=$username><h4 class='npc'>By $username</h4></a>";
        echo "<p >$contents</p> <hr>";
    }