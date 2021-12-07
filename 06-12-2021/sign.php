<?php
if (isset($_GET['submit'])) {
    if (empty($_GET['login']) || empty($_GET['password']) || mb_substr_count($_GET['login'], " ") > 0 || mb_substr_count($_GET['password'], " ") > 0) {
        echo '<br>Все, конечно, хорошо, но пустые данные лучше не вводить.))<br>';
    }
}
foreach($_COOKIE as $key => $value) setcookie($key, "");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/form.css">
    <title>Регистрация</title>
</head>
<body>
<main>
    <div class="login-box">
        <h2>Пожалуйста, зарегистрируйтесь</h2>
        <form method="get" action="auth.php">
            <div class="user-box">
                <input type="text" name="login" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <a href="">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input class="submit" type="submit" value="Зарегистрироваться">
            </a>
            <a href="auth.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Авторизоваться
            </a>
            <a href="index.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                На главную
            </a>
        </form>
    </div>
</main>
</body>
</html>