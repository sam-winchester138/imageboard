<?php
$uploadOk = 1;
function isimage($file){
    $check = getimagesize($file);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $GLOBALS['uploadOk'] = 1;
    } else {
        echo "File is not an image.";
        $GLOBALS['uploadOk'] = 0;
    }
};
function exists($newfilename){
    if (file_exists($newfilename)) {
        echo "Sorry, file already exists.";
        $GLOBALS['uploadOk'] = 0;
    }
};
function toolarge(){
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $GLOBALS['uploadOk'] = 0;
      }
};
function format($imageFileType){
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $GLOBALS['uploadOk'] = 0;
    }
};
function verify(){
    if($GLOBALS['uploadOk'] != 1){
        return 0;
    } else {
        return 1;
    }
};