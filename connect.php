<?php
    $connect = mysqli_connect("localhost", "root", "", "authform");

    if (!$connect) {
        die("Database connection error");
    }
?>