<?php
$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

function upload($newfilename){
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newfilename)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
function assign($conn, $filename, $username){
    $query = "UPDATE info SET picture = ? WHERE Ausername =?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $filename, $username);
    $stmt->execute();

}