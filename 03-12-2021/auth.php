<?php
$trueLogin = md5($_GET['login']);
$truePassword = md5($_GET['password']);
$insertedName = $_POST['aLogin'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/form.css">
    <title>Авторизация</title>
</head>
<body>
<main>
    <div class="login-box">
        <h2>Есть учетная запись? Давайте проверим.)</h2>
        <form method="post" action="">
            <div class="user-box">
                <input type="text" name="aLogin" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="aPW" required="">
                <label>Password</label>
            </div>
            <a href="">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input class="submit" type="submit" name="submit" value="Авторизоваться">
            </a>
            <?php
            if ($_POST['submit']) {
            if (md5($_POST['aLogin']) == $trueLogin && md5($_POST['aPW']) == $truePassword) {
                echo "<p>Успешно! Привет, $insertedName</p>";
            }  else echo "<p>Неверные данные, либо таких данных нет</p>";
            }
            if (empty($_GET['login']) || empty($_GET['password']) || mb_substr_count($_GET['login'], " ") > 0 || mb_substr_count($_GET['password'], " ") > 0) {
                echo '<br>Все, конечно, хорошо, но пустые данные лучше не вводить.))<br>';
            } else {
                echo "<br>Для проверки отобразил указанные при регистрации данные. <br> Логин:". $_GET['login'];
                echo "<br> Пароль:".$_GET['password'];
            }
            ?>
            <a href="sign.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Зарегистрироваться
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