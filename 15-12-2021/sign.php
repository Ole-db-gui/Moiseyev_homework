<?php
    $hostname = 'localhost';
    $username = 'Vova';
    $password = 'myPW888';
    $dbName = 'users';
    $dbConnect = mysqli_connect($hostname, $username, $password, $dbName);

    mysqli_set_charset($dbConnect, 'utf8');

    $login = $_GET['login'];
    $userPassword = md5($_GET['password']);
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
        <form method="get" action="">
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
                <input class="submit" type="submit" name="submit" value="Зарегистрироваться">
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
    <?php
        if (isset($_GET['submit'])) {
            $errors = [];
            if (!preg_match("/^[a-zA-Z0-9]+$/", $_GET['login'])) {
                $errors[] = "Логин содержит запрещенные символы";
            }
            if (strlen($_GET['login']) < 3 || strlen($_GET['login']) > 30) {
                $errors[] = "Длина логина должна быть 3-30 символов";
            }
            $isUser = mysqli_query($dbConnect, "SELECT id_user FROM data WHERE login='" . mysqli_real_escape_string($dbConnect, $_GET['login']) . "'");
            if (mysqli_num_rows($isUser) > 0) {
                $errors[] = "Пользователь с таким логином уже существует в базе данных";
            }
            if (count($errors) == 0) {
                $query = "INSERT INTO data (id_user, login, password) VALUES (null, '$login', '$userPassword')";
                $sql = mysqli_query($dbConnect, $query);
                foreach($_COOKIE as $key => $value) setcookie($key, '');
                header("location: auth.php");
            } else {
                echo 'При регистрации произошли ошибки';
                print_r($errors);
            }
        }
    ?>
</main>
</body>
</html>