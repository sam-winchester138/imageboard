<?php   
            require_once '../config_session.inc.php';
            require_once '../dbh.inc.php';
            require_once 'hp_model.inc.php';
            require_once 'hp_view.inc.php';
            require_once 'hp_control.inc.php';
            
            //show_posts($conn);
                if(isset($_POST["submit"])){
                    $title = htmlspecialchars($_POST["title"]);
                    $contents = htmlspecialchars($_POST["contents"]);
                    $username = htmlspecialchars($_SESSION["username"]);
                    $postType = htmlspecialchars($_POST["postType"]);
                    if($_FILES["image"]["name"] != null || $_FILES["image"]["name"] != ""){
                        $target_dir = "../../images/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                        $temp = explode(".", $_FILES["image"]["name"]);
                        $newfilename = round(microtime(true)) . '.' . end($temp);
                        $filename = $newfilename;
                        $newfilename = $target_dir . $newfilename;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        //ERRORS
                        $errors = [];
                        if(text_too_long($title, $contents, $postType)){
                            $errors["input_toolong"] = "Your title or contents contain too much text";
                        }
                        if(is_input_empty($title, $contents)){
                            $errors["input_empty"] = "Please fill in all fields";
                        }

                        if($errors){
                            $_SESSION["errors_post"] = $errors;
                            //$_SESSION["signup_data"] = $username;
                            header("Location: ../../Homepage.php");
                            die();
                        }
                        if(make_post($conn, $username, $title, $contents, $postType, $filename)){
                            upload($newfilename);
                            header("Location: ../../Homepage.php");
                        };
                    } else {
                        $errors = [];
                        if(text_too_long($title, $contents, $postType)){
                            $errors["input_toolong"] = "Your title or contents contain too much text";
                        }
                        if(is_input_empty($title, $contents)){
                            $errors["input_empty"] = "Please fill in all fields";
                        }

                        if($errors){
                            $_SESSION["errors_post"] = $errors;
                            //$_SESSION["signup_data"] = $username;
                            header("Location: ../../Homepage.php");
                            die();
                        }
                        if(make_post($conn, $username, $title, $contents, $postType, "")){
                            header("Location: ../../Homepage.php");
                        };
                    }
                    $conn = null;
                    $stmt = null;
                
                    
                    //header("Location:../../Homepage.php");
                }