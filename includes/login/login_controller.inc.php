<?php
    declare(strict_types=1);
    function check_acc(object $conn, string $username, string $password){
        if(getacc($conn, $username, $password)){
            return true;
        }
    }

    function isAdmin($conn, string $username){
        adminCheck($conn, $username);
    }

    function is_input_empty(string $username, string $password){
        $name = str_replace(' ', '', $username);
        $pass = str_replace(' ', '', $password);
        if(empty($name) || empty($pass)){
            return true;
        } else {
        return false;
        }
    }