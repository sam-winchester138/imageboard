<?php
    function accountnum(object $conn){
        $result = numaccs($conn);
        return $result;
    }
    function getaccname(object $conn, string $runs){
        $username = accname($conn, $runs);
        return $username;
    }