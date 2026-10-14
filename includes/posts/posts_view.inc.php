<?php

        function showposts($conn){
            require_once 'includes/img/imgm.inc.php';
           
            $aname = 1;
            $base = 1;
            while($base <= $_SESSION["runs"]){

                $title = $_SESSION['title'][$aname];
                $username = $_SESSION['post_username'][$aname];
                $contents = $_SESSION['content'][$aname];
                $postType = $_SESSION['postType'][$aname];
                $postID = $_SESSION['postID'][$aname];
                $persaccUrl = "user.php?account=$username";
                $postUrl = "post.php?post=$postID";
                $pimage = $_SESSION["pimage"][$aname];
                $image = get_image($conn, $username);
                if($pimage == ""){
                    if($postType === "spost"){
                        echo "<h3 class='npc'>$title</h3>";

                        echo  "<h4 class='npc'>By <a href=$persaccUrl>$username</a><img style = 'height:20px;'src='images/". $image. "'></h4>";

                        echo "<p class='npc'>$contents</p> <hr>";

                    } elseif($postType === "lpost"){
                        echo  "<a href=$postUrl><h3 class='npc'>$title</h3></a>";

                        echo  "<h4 class='npc'>By <a href=$persaccUrl>$username</a><img style = 'height:20px;'src='images/". $image. "'></h4> <hr>";

                    };
                } else {
                    if($postType === "spost"){
                        echo "<h3 class='npc'>$title</h3>";
                        echo "<img src ='images/$pimage' style = 'height: 200px;'>";

                        echo  "<h4 class='npc'>By <a href=$persaccUrl>$username</a><img style = 'height:20px;'src='images/". $image. "'></h4>";

                        echo "<p class='npc'>$contents</p> <hr>";

                    } elseif($postType === "lpost"){
                        echo  "<a href=$postUrl><h3 class='npc'>$title</h3></a>";

                        echo  "<h4 class='npc'>By <a href=$persaccUrl>$username</a><img style = 'height:20px;'src='images/". $image. "'></h4> <hr>";

                    }
                };
                $base = $base + 1;
                $aname = $aname + 1;
            }
        }