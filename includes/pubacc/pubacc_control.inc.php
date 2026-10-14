<?php
    function get_post($conn, $account, $postID){
        return post($conn, $account, $postID);
    }
    function get_num_posts($conn, $account){
        return num_posts($conn, $account);
    }