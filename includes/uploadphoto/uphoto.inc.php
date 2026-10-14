<?php
require_once '../config_session.inc.php';
require_once '../dbh.inc.php';
require_once 'upc.inc.php';
require_once 'upm.inc.php';
$username = htmlspecialchars($_SESSION["username"]);
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$filename = $newfilename;
$newfilename = $target_dir . $newfilename;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//echo $newfilename;
if(isset($_POST["submit"])) {
  isimage($_FILES["fileToUpload"]["tmp_name"]);
  exists($newfilename);
  format($imageFileType);
  $check = verify();
  if($check == 1){
    upload($newfilename);
    echo "*************", $filename, "************";
    assign($conn, $filename, $username);
  }else{
    echo "Sorry, there has been an error";
  }

}
?>
