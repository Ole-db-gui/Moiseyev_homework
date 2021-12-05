<?php include 'background.php'
    ?>
<!doctype html>
<html lang="en">
<head>
    <style>
        footer {
            width: 100%;
            position:absolute;
            bottom:0;
        }
        .submit {
            margin-top:20px;
            margin-left: 20px;
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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Регистрация и авторизация JS</title>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
        <form action="" id="sign" method="post">
            <h2>Регистрация</h2>
            <p>
                <span>Логин:</span>
                <input type="text" name="login" id="">
            </p>
            <p>
                <span>Пароль:</span>
                <input type="password" name="password">
            </p>
            <p>
                <input type="submit" class="submit" value="Зарегистрироваться">
            </p>
        </form>
    </main>
    <footer>
        <?php include 'footer.php'?>
    </footer>
    <script src="auth.js"></script>
</body>
</html>