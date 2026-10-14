<?php
    declare(strict_types=1);

    function is_input_empty(string $username, string $password){
        $name = str_replace(' ', '', $username);
        $pass = str_replace(' ', '', $password);
        if(empty($name) || empty($pass)){
            return true;
        } else {
        return false;
        }
    }

    function is_username_taken($conn, string $username){
        if(get_username($conn, $username)){
            return true;
        } else {
            return false;
        }
    }

    function create_user($conn, string $username, string $password, string $address){
        set_user($conn, $username, $password, $address);
    }
