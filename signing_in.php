<?php
    require_once "connect.php";
    mysqli_set_charset($connect, "utf8");

    $login = $_POST["login"];
    $password = md5($_POST["password"]);

    $user_check = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    echo mysqli_num_rows($user_check);
?>