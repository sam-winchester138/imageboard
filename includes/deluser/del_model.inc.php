<?php
    function del(object $conn, string $username){
        $sql = "DELETE FROM info WHERE Ausername = ?";
        $stmt = $conn->prepare($sql);
        $stmt-> bind_param("s", $username);
        $stmt->execute();
        return true;
    }