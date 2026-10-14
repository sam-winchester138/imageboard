<?php
    function deluser(object $conn, string $username){
        if(del($conn, $username)){
            return true;
        }
    }