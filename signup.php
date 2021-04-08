<?php
//    session_start();
    require_once "connect.php";

//    $connect; // переменная доступна нам в этом файле, т. к.
              // мы подключили файл connect.php
    mysqli_set_charset($connect, "utf8");
    $charset = mysqli_character_set_name ($connect);
//    echo $charset;
    $full_name = trim($_POST["full-name"]);
    $login = $_POST["login"];
    $e_mail = $_POST["e-mail"];
    $password = $_POST["password"];
    $password_verification = $_POST["password-verification"];
    $user_check = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    $num_of_matches = mysqli_num_rows($user_check);

    if ($full_name == "" || $login == "" || $e_mail == "" || $password == "" || $password_verification == "") {
        echo "Не все поля заполнены";
    }
    elseif (!filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {
        echo "Введите корректный адрес электронной почты";
    }
    elseif ($password !== $password_verification) {
        echo "Введённые пароли не совпадают";
    }
    elseif ($num_of_matches > 0) {
        echo "Пользователь с таким логином уже существует";
    }
    else {
        $password = md5($password);
        mysqli_query($connect,"INSERT INTO `users` (`id`, `full-name`, `login`, `e-mail`, `password`) VALUES (NULL, '$full_name', '$login', '$e_mail', '$password')");
        echo "Регистрация прошла успешно";
//        header("Location: index.php");
    }



