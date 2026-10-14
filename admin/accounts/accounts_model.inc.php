<?php
    function startnum($conn){
        $sql = "SELECT MIN(userID) AS numb FROM info";
        $stmt = $conn->query($sql);
        while($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)){
            $nums = $row["numb"];
            return $nums;
        }
    }
    function endnum($conn){
        $sql = "SELECT MAX(userID) AS final FROM info";
        $stmt = $conn->query($sql);
        while($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)){
            $bnum = $row["final"];
            return $bnum;
        }
        
    }
    function numaccs(object $conn){
        /*$sql = "SELECT Ausername FROM info";
        $stmt = $conn->query($sql);
        $count = mysqli_num_rows($stmt);
        $nums = $count + startnum($conn);
        return $nums;
        */
        $star = startnum($conn);
        $fin = endnum($conn);
        $prod = $star + $fin;
        return $prod;
}
    function accname(object $conn, string $runs){
        $sql = "SELECT Ausername FROM info WHERE userID = ?  AND userType != 'Admin'";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $runs);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->fetch();
        return $username;
    }