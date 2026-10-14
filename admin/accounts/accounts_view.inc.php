<?php

    function showaccs(){

        for ($runs = 1; $runs <= $_SESSION["an"]; $runs++) {

            $username = $_SESSION['usersnames'][$runs];

            $url = "../includes/deluser/deleteuser.inc.php";

            //echo "<a href='$url'>urmea</a><br>"; ?username=$username

            if($username != null){

                echo "<div class = 'clearfix'>";

                echo "<form action='$url' method='GET'>";

                echo "<p>$username</p>";

                echo "<input class='ran' type='hidden' name = 'username' value='$username'>";

                echo "<button type='submit'>Delete user</button>";

                echo "</form>";

                echo "</div>";

            }

          }

          

    }