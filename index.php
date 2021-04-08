<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <form id="form" class="form">
        <div id="sign-in-login" class="line">
            <label class="label">
                <span class="title">Логин</span>
                <input type="text" placeholder="Введите логин" id="login" name="login" class="input">
            </label>
        </div>
        <div id="sign-in-password" class="line">
            <label class="label">
                <span class="title">Пароль</span>
                <input type="password" placeholder="Введите пароль" id="password" name="password" class="input">
            </label>
        </div>
        <div id="button">
<!--            <button id="sign-in-button">Войти</button>-->
            <input id="sign-in-button" type="button" value="Войти">
        </div>
<!--        <div id="for-response"></div>-->
        <div id="registration-suggestion">
            <p>Нет аккаунта?</p>
            <a href="registration.php">Зарегистрируйтесь</a>
        </div>
    </form>
    <script src="signing_in.js"></script>
</body>
</html>
