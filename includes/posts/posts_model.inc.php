<?php

function amount_posts(object $conn){

        $sql = 'SELECT COUNT(*) as count FROM posts';

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        $calls = $row['count'];

        return $calls;

    }

    function get_posts(object $conn, $postid){

        $post = $conn->query("SELECT * FROM posts WHERE postID = $postid");

        while ($row = $post->fetch_assoc()) {

            $postID = $row['postID'];

            $title = $row['title'];

            $username = $row['username'];

            $contents = $row['contents'];

            $postType = $row['postType'];

            $plimage = $row['image'];
            return array($title, $username, $contents, $postType, $postID, $plimage);
        };

    }

 