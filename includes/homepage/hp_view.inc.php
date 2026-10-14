<?php

    function check_post_errors(){

        if(isset($_SESSION['errors_post'])){

            $errors = $_SESSION['errors_post'];

            echo "<br>";

            foreach ($errors as $error) {

                echo '<p>'. $error  .'</p>';



            };  
            unset($_SESSION['errors_post']);

        } else if(isset($_GET["post"]) && $_GET["post"] == 1) {

            header("Location: ../../homepage.php?post=1");

            echo "<br>";

            echo "<p> Post succesful</p>";

        }

    }

    /*function posttest(){

    //$_SESSION["numb"];

        $servername = "127.0.0.1";

        $username = "root";

        $password = "";

        $dbname = "danzig";

        // Create connectionmysql:host=

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = 'SELECT COUNT(*) as count FROM posts';

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();

            $calls = $row['count'];

            $posts = $calls;

            while($posts > 0){

                $fuck = $conn->query("SELECT * FROM posts WHERE postID =$posts");

                while ($row = $fuck->fetch_assoc()) {

                    showposts($row['title'], $row['username'], $row['contents']);

                };

                $posts--;

            };

        }

    }$title, $username, $contents

        

    

    function showposts(){

            $aname = 1;

            $base = 0;

            while($base <= $_SESSION["runs"]){

                $title = $_SESSION['title2'][$aname];

                $username = $_SESSION['username2'][$aname];

                $contents = $_SESSION['content2'][$aname];

                echo "<h3 class='npc'>$title</h3>";

                echo  "<h4 class='npc'>By $username</h4>";

                echo "<p class='npc'>$contents</p> <hr>";

                $base = $base + 1;

                $aname = $aname + 1;

            }

        

    }*/ 

