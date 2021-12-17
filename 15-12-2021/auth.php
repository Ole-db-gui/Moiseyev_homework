<?php
    include_once 'background.php';
    include_once 'header.php';

    $hostname = 'localhost';
    $username = 'Vova';
    $password = 'myPW888';
    $dbName = 'users';
    $dbConnect = mysqli_connect($hostname, $username, $password, $dbName);

    mysqli_set_charset($dbConnect, 'utf8');

    if($_COOKIE['Auth'] == 1) {
        header("location: hello.php");
    }

    if(isset($_GET['submit']))
    {
        $query = mysqli_query($dbConnect,"SELECT * FROM data WHERE login='".mysqli_real_escape_string($dbConnect, $_GET['login'])."'");
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        if($data[0]['password'] == md5($_GET['password']))
        {
            setcookie('currentUser', $data[0]['login'], time() + 3600 * 24 * 5);
            setcookie('Auth', 1, time() + 3600 * 24 * 5);
            echo "Здравствуйте, ".$data[0]['login']."!";
            header("location: hello.php");
        }
        else
        {
            echo "Вы ввели неверные данные";
        }
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <style>
        form {
            margin: 10px;
        }
        .submit {
            margin: 20px 0;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            background: rgba(7,17,40,0.5);
            color: #ecf403;
            letter-spacing: 4px;
            border: none;
        }
        .submit:hover {
            background: #11a112;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
        }
    </style>
    <title>Авторизация</title>
</head>
<body style="background-color: <?php
        if ($_COOKIE['Auth'] == 1 ) echo $_COOKIE['backgroundColor']?>">
    <main>
        <div>
            <p style="font-size:24px">
                <?php if ($_COOKIE['Auth'] == 1) {
                    if (trim($_COOKIE['lastVisited'] != "" && isset($_COOKIE['lastVisited']))){
                        if ($_COOKIE['lastVisited'] == 'Факт') {
                            echo 'Пользователь ' . $_COOKIE['currentUser'] . ' посещал последней страницу Факта';
                        } else if ($_COOKIE['lastVisited'] == 'Bitrix') {
                            echo 'Пользователь ' . $_COOKIE['currentUser'] . ' посещал последней страницу Bitrix';
                        }
                    } else echo 'Пользователь ' . $_COOKIE['currentUser'] . ' еще ничего не посещал';
                } else echo 'Пожалуйста, авторизуйтесь';
                ?>
            </p>
        </div>
        <form method="get" action="" <?php echo ($_COOKIE['Auth'] == 1) ? 'hidden' : null?>>
            <div>
                <input type="text" name="login" required="">
                <label>Username</label>
            </div>
            <div>
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <a href="">
                <input class="submit" type="submit" name="submit" value="Авторизоваться">
            </a>
        </form>
        <form action="auth.php" method="get">
            <select name="color">
                <option value="green">Зеленый</option>
                <option value="orange">Оранжевый</option>
                <option value="yellow">Жёлтый</option>
                <option value="purple">Фиолетовый</option>
                <option value="gray">Серый</option>
            </select>
            <input type="submit" name="submitColor" value="Change Color">
            <?php
                (isset($_GET['submitColor'])) ? setcookie('backgroundColor', $_GET['color'], time() + 3600 * 24 * 5) : null;
            ?>
        </form>
        <div>
                <a href="fact.php">
                    <input class="submit" type="button" name="visited" value="Факт">
                </a>
                <a href="bitrix.php">
                    <input class="submit" type="button" name="visited" value="Bitrix">
                </a>
        </div>
        <div>
            <a href="sign.php"><input class="submit" type="button" value="Регистрация"></a>
            <a href="logout.php"><input class="submit" type="button" value="Logout"></a>
            <a href="index.php"><input class="submit" type="button" value="На главную"></a>
        </div>
    </main>
    <?php include_once 'footer.php'?>
</body>
</html>