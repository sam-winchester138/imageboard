<?php

    function show_name(){

        $username = $_SESSION["username"];

        echo "<h1>$username</h1>";

    }

    function show_title(){

        $username = $_SESSION["username"];

        echo "<title>$username</title>";

    }
