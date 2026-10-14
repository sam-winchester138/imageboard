<?php
    function lpost(object $conn, $postid){

        $post = $conn->query("SELECT * FROM posts WHERE postID = $postid");

        while ($row = $post->fetch_assoc()) {

            $title = $row['title'];

            $username = $row['username'];

            $contents = $row['contents'];
            $image = $row["image"];

            return array($title, $username, $contents, $image);
        };

    } 