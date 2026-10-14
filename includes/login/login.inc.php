<?php

    //session_abort();

        if(isset($_POST['submit'])){

            

            require_once '../config_session.inc.php';

            require_once '../dbh.inc.php';

            require_once 'login_model.inc.php';

            require_once 'login_controller.inc.php';

            

            

            $username = htmlspecialchars($_POST['username']);

            $password = htmlspecialchars($_POST['password']);

            //error handlers

            $errors = [];

            if(is_input_empty($username, $password)){

                $errors["empty_input"] = "Fill in all fields"; 



            }

            if(!check_acc($conn, $username, $password) && !is_input_empty($username, $password)){

                $errors["wpwd"] = "Wrong username or password";

            }

            /*if(is_username_taken($conn, $username)){

                $errors["username_taken"] = "Username or password is incorrect"; 

            }*/



            if($errors){

                $_SESSION["errors_login"] = $errors;

                //$_SESSION["signup_data"] = $username;

                header("Location: ../../index.php");

                die();

            }

            $_SESSION["veri"] = true;

            $_SESSION["username"] = $username;

            if(adminCheck($conn, $username)){

                $_SESSION["userType"] = "Admin";

                header("Location: ../../admin/admin.php");

                die();

            } else {

                $_SESSION["userType"] = null;

            }

            header("Location: ../../Homepage.php");

            /*if(check_acc($conn, $username, $password)  == True){

                $_SESSION["username"] = $username;

                if(isAdmin($conn, $username) === true){

                    $_SESSION["userType"] = "Admin";

                }

            } else {

                echo "Username or password is incorrect";

            }

            */

            $stmt = null;

            $conn = null;

        }