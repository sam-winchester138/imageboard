<?php
    declare(strict_types=1);
    function text_too_long(string $title, string $contents, string $postType){
        if($postType === "spost"){
            if(strlen($title) > 25|| strlen($contents) > 400){
                return true;
            }else{
                return false;
            }
        } elseif ($postType === "lpost"){
            if(strlen($title) > 40|| strlen($contents) > 1500){
                return true;
            }else{
                return false;
            }
        }
    }
    function make_post(object $conn, string $username, string $title, string $contents, string $postType, $imageName){
        if(create_post($conn, $username, $title, $contents, $postType, $imageName)){
            return true;
        }
    }
    function is_input_empty(string $title, string $contents){
        $tit = str_replace(' ', '', $title);
        $cont = str_replace(' ', '', $contents);
        if(empty($tit) || empty($cont)){
            return true;
        } else {
            return false;
        }
    }