<?php
    declare(strict_types=1);
    function getacc(object $conn, string $username, string $password){
        $stmt = $conn->prepare("SELECT Apassword FROM info WHERE Ausername = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        //$stmt->bind_result($pwd);
        $result = $stmt->get_result();
        //$result = $stmt->fetch_assoc();
        //$auth = password_verify($password, $pwd);
        while ($row = $result->fetch_assoc()) {
            $str = implode(',', $row);
            if(password_verify($password, $str)){
                //echo "works";
                //header("Location: ../Homepage.php");
                return true;
            } else {
                //$_SESSION["errors_login"]["wpass"] = "wrong password";
                return false;
            }
        }
       /* if($password = $str){
            return true;
            echo "works";
        } else {
            echo "wrong password";
        } */
        //echo $result;
    }

    function adminCheck(object $conn, string $username){
        $stmt = $conn->prepare("SELECT userType FROM info WHERE Ausername = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($type);
        //$result = $stmt->fetch_array(MYSQLI_ASSOC);
        $result = $stmt->fetch();
        if($type === "Admin"){
            return true;
        } else {
            return false;
        }
    }
