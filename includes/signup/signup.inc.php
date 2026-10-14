<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST['submit'])){
            require_once '../dbh.inc.php';
            require_once 'signup_model.inc.php';
            require_once 'signup_controller.inc.php';
            require_once '../config_session.inc.php';
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $address = htmlspecialchars($_POST['address']);

            $errors = [];
            if(is_input_empty($username, $password)){
                $errors["empty_input"] = "Fill in all fields"; 

            }
            if(is_username_taken($conn, $username)){
                $errors["username_taken"] = "Username already in use"; 
            }

            if($errors){
                $_SESSION["errors_signup"] = $errors;
                $_SESSION["signup_data"] = $username;
                header("Location: ../../singuppage.php");
                die();
            }
            create_user($conn, $username, $password, $address);
            header("Location: ../../index.php");
            $conn = null;
            $stmt = null;
        }
    } else {
        header("Location: ../singuppage.php");
        die();
    }
    