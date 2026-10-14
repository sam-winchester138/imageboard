<?php

    declare(strict_types=1);

    function create_post(object $conn, string $username, string $title, string $contents, string $postType, string $imageName){

        $sql = "INSERT INTO posts(username, title, contents, postType, image) VALUES (?,?,?,?,?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("sssss", $username, $title, $contents, $postType, $imageName);

        $stmt->execute();

        return true;

        $stmt = null;

    }

    function upload($newfilename){
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $newfilename)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }

    