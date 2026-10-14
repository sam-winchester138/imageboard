<?php
    function post($conn, $account, $postID){
        $sql = "SELECT * FROM posts WHERE username = ? AND postID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $account, $postID);
        $stmt->execute();
        $result = $stmt -> get_result();
        while ($row = $result->fetch_assoc()) {
            $title = $row['title'];
            $contents = $row['contents'];
            return array($title,$contents);
                    
        };
    }
    function get_postIDs($conn, $account){
        $sql = "SELECT postID FROM posts WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $account);
        $stmt->execute();
        $result = $stmt -> get_result();
        $postID = [];
        for($x=1; $row = $result->fetch_assoc(); $x++){
            $postID[$x] = $row['postID'];
        }
        return $postID;
        //$postIDs = $result -> fetch_assoc();
        /*while ($row = $result->fetch_assoc()) {
            $postID = $row['postID'];
            return $postID;
        };*/
    }
    function num_posts($conn, $account){
        $sql = 'SELECT COUNT(*) as count FROM posts WHERE username=?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $account);
        $stmt->execute();
        $result = $stmt -> get_result();
        $row = $result->fetch_assoc();
        $calls = $row['count'];
        return $calls;
    }