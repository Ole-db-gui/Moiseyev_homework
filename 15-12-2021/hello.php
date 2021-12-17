<?php
    include_once 'background.php';
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body style="background-color: <?php
if ($_COOKIE['Auth'] == 1 ) echo $_COOKIE['backgroundColor']?>">
<?php include "header.php";?>
<main>
    <div>
        <p style="font-size:24px">
            <?php if ($_COOKIE['Auth'] == 1) {
                echo "Здравствуйте, ".$_COOKIE['currentUser']."!<br>";
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
