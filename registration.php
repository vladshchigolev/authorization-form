<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<form id="form">
    <div class="line">
        <label class="label">
            <span class="title">ФИО</span>
            <input type="text" placeholder="Введите своё полное имя" id="full-name" class="input">
        </label>
    </div>
    <div class="line">
        <label class="label">
            <span class="title">Логин</span>
            <input type="text" placeholder="Введите логин" id="login" class="input">
        </label>
    </div>
    <div class="line">
        <label class="label">
            <span class="title">Почта</span>
            <input type="email" placeholder="Введите свой адрес электронной почты" id="e-mail" class="input">
        </label>
    </div>
    <div class="line">
        <label class="label">
            <span class="title">Пароль</span>
            <input type="password" placeholder="Введите пароль (не менее 6 символов)" id="password" class="input">
        </label>
    </div>
    <div class="line">
        <label class="label">
            <span class="title">Подтверждение пароля</span>
            <input type="password" placeholder="Введите пароль ещё раз" id="password-verification" class="input">
        </label>
    </div>
    <div id="button">
        <input id="sign-up-button" type="button" value="Зарегистрироваться">
    </div>
    <div id="registration-suggestion">
        <p>Уже зарегистрированы?</p>
        <a href="index.php">Авторизуйтесь</a>
    </div>
    <script src="test.js"></script>
</form>
</body>
</html>