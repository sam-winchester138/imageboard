<?php
    declare(strict_types=1);
    function get_username($conn, string $username){
        $stmt = $conn->prepare("SELECT Ausername FROM info WHERE Ausername = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

function set_user($conn, string $username, string $password, string $address){
    $hashpass = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO info (Ausername, Apassword, Aaddress, userType) VALUES(?, ?, ?, '')";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $hashpass, $address);
    $stmt->execute();
}
    