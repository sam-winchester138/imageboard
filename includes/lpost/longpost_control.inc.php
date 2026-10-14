<?php
    function get_lpost(object $conn, int $postID){
        $title = "";
        $username = "";
        $contents = "";
        $image = "";
        list($title, $username, $contents, $image) = lpost($conn, $postID);
        
        return array($title, $username, $contents, $image);
    }