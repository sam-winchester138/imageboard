<?php
@include_once '../config_session.inc.php';
@include_once '../dbh.inc.php';
function get_image(object $conn, string $username){
    $query = "SELECT picture FROM info WHERE Ausername = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("s", $username);

    $stmt->execute();
    $result = $stmt -> get_result();
    $picresult = $result->fetch_array()['picture'] ?? '';
    return $picresult;

};
function forfuckssake(){
    get_image($conn, $username);
}