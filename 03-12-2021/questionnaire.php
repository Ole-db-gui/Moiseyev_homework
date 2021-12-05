<?php
include 'header.php';
include 'background.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .submit {
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
    <link rel="stylesheet" href="styles/styles.css">
    <title>Questionnaire</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <p>
                <span>1. Считаете ли Вы, что у многих ваших знакомых хороший характер?</span>
                <label>
                    <input type="radio" name="1" value="0" checked>
                </label><label for="1"> Да </label>
                <label>
                    <input type="radio" name="1" value="1">
                </label><label for="1"> Нет </label>
            </p><hr>
            <p>
                <span>2. Раздражают ли Вас мелкие повседневные обязанности? </span>
                <label>
                    <input type="radio" name="2" value="0" checked>
                </label><label for="2"> Да </label>
                <label>
                    <input type="radio" name="2" value="1">
                </label><label for="2"> Нет </label>
            </p><hr>
            <p>
                <span>3. Верите ли Вы, что ваши друзья преданы Вам? </span>
                <label>
                    <input type="radio" name="3" value="1" checked>
                </label><label for="3"> Да </label>
                <label>
                    <input type="radio" name="3" value="0">
                </label><label for="3"> Нет </label>
            </p><hr>
            <p>
                <span>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? </span>
                <label>
                    <input type="radio" name="4" value="0" checked>
                </label><label for="4"> Да </label>
                <label>
                    <input type="radio" name="4" value="1">
                </label><label for="4"> Нет </label>
            </p><hr>
            <p>
                <span>5. Способны ли Вы ударить собаку или кошку?</span>
                <label>
                    <input type="radio" name="5" value="0" checked>
                </label><label for="5"> Да </label>
                <label>
                    <input type="radio" name="5" value="1">
                </label><label for="5"> Нет </label>
            </p><hr>
            <p>
                <span>6. Часто ли Вы принимаете лекарства? </span>
                <label>
                    <input type="radio" name="6" value="0" checked>
                </label><label for="6"> Да </label>
                <label>
                    <input type="radio" name="6" value="1">
                </label><label for="6"> Нет </label>
            </p><hr>
            <p>
                <span>7. Часто ли Вы меняете магазин, в который ходите за продуктами?</span>
                <label>
                    <input type="radio" name="7" value="0" checked>
                </label><label for="7"> Да </label>
                <label>
                    <input type="radio" name="7" value="1">
                </label><label for="7"> Нет </label>
            </p><hr>
            <p>
                <span>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</span>
                <label>
                    <input type="radio" name="8" value="0" checked>
                </label><label for="8"> Да </label>
                <label>
                    <input type="radio" name="8" value="1">
                </label><label for="8"> Нет </label>
            </p><hr>
            <p>
                <span>9. Тяготят ли Вас общественные обязанности? </span>
                <label>
                    <input type="radio" name="9" value="1" checked>
                </label><label for="9"> Да </label>
                <label>
                    <input type="radio" name="9" value="0">
                </label><label for="9"> Нет </label>
            </p><hr>
            <p>
                <span>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</span>
                <label>
                    <input type="radio" name="10" value="1" checked>
                </label><label for="10"> Да </label>
                <label>
                    <input type="radio" name="10" value="0">
                </label><label for="10"> Нет </label>
            </p><hr>
            <p>
                <span>11. Часто ли Вам приходят в голову мысли о Вашей невезучести?</span>
                <label>
                    <input type="radio" name="11" value="0" checked>
                </label><label for="11"> Да </label>
                <label>
                    <input type="radio" name="11" value="1">
                </label><label for="11"> Нет </label>
            </p><hr>
            <p>
                <span>12. Сохранилась ли у Вас фигура по сравнению с прошлым?</span>
                <label>
                    <input type="radio" name="12" value="0" checked>
                </label><label for="12"> Да </label>
                <label>
                    <input type="radio" name="12" value="1">
                </label><label for="12"> Нет </label>
            </p><hr>
            <p>
                <span>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</span>
                <label>
                    <input type="radio" name="13" value="1" checked>
                </label><label for="13"> Да </label>
                <label>
                    <input type="radio" name="13" value="0">
                </label><label for="13"> Нет </label>
            </p><hr>
            <p>
                <span>14. Нравится ли Вам семейная жизнь?</span>
                <label>
                    <input type="radio" name="14" value="1" checked>
                </label><label for="14"> Да </label>
                <label>
                    <input type="radio" name="14" value="0">
                </label><label for="14"> Нет </label>
            </p><hr>
            <p>
                <span>15. Злопамятны ли Вы?</span>
                <label>
                    <input type="radio" name="15" value="0" checked>
                </label><label for="15"> Да </label>
                <label>
                    <input type="radio" name="15" value="1">
                </label><label for="15"> Нет </label>
            </p><hr>
            <p>
                <span>16. Находите ли Вы, что стоит погода, типичная для данного времени года? </span>
                <label>
                    <input type="radio" name="16" value="0" checked>
                </label><label for="16"> Да </label>
                <label>
                    <input type="radio" name="16" value="1">
                </label><label for="16"> Нет </label>
            </p><hr>
            <p>
                <span>17. Случается ли Вам с утра быть в плохом настроении? </span>
                <label>
                    <input type="radio" name="17" value="1" checked>
                </label><label for="17"> Да </label>
                <label>
                    <input type="radio" name="17" value="0">
                </label><label for="17"> Нет </label>
            </p><hr>
            <p>
                <span>18. Раздражает ли Вас современная живопись? </span>
                <label>
                    <input type="radio" name="18" value="1" checked>
                </label><label for="18"> Да </label>
                <label>
                    <input type="radio" name="18" value="0">
                </label><label for="18"> Нет </label>
            </p><hr>
            <p>
                <span>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?</span>
                <label>
                    <input type="radio" name="19" value="1" checked>
                </label><label for="19"> Да </label>
                <label>
                    <input type="radio" name="19" value="0">
                </label><label for="19"> Нет </label>
            </p><hr>
            <br>
            <p>
                <input type="submit" class="submit" name="submit" value="Проверить результат"><br><br>
                <span>По умолчанию включен функционал отправки и обработки формы на сервере. (Решение для PHP)</span><br>
                <span>Для проверки функционала обработки результатов заполнения формы-анкеты в браузере, включите скриптик в листинге, внизу body.</span><br>
                <span>В скриптике JS привязываю слушателя события "submit" на форму регистрации и блокирую действие по умолчанию, чтобы страница не перезагружалась.</span>
            </p>
        </form>
        <hr>
        <p style="font-size:28px">
            Результат:
            <?php
            if (isset($_POST['submit'])) {
                $results = 0;
                foreach ($_POST as $item) {
                    $results += (int)$item;
                }
                switch ($results) {
                    case ($results < 8):
                        echo "Вашим друзьям можно посочувствовать";
                        break;
                    case ($results >= 8 && $results <= 15):
                        echo "Вы не лишены недостатков, но с вами можно ладить";
                        break;
                    case $results > 15:
                        echo "У Вас покладистый характер";
                        break;
                }
            } else echo "Пожалуйста, ответьте на вопросы и отправьте данные на проверку результатов";
            ?>
        </p>
        <br>
        <p id="resultJS"></p>
    </main>
    <?php
        include 'footer.php'
    ?>
<!--    <script src="questionnaire.js"></script>-->
</body>
</html>