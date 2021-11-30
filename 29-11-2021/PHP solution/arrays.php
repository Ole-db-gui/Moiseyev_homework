<?php
    include 'background.php';
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Массивы</title>
</head>
<body>
    <?php
    require 'header.php'
    ?>
    <main>
        <h2>Решение на PHP:</h2>
        <div>
            <h2> 1. Создать массив размера n, заполненный случайными числами. Вывести каждый элемент массива с новой строки. Все четные элементы массива необходимо вывести жирным шрифтом.
            </h2>
            <?php
            $n = mt_rand(2,10);
            $array1 = [];
            for ($i = 0; $i < $n; $i++) {
                $array1[] = mt_rand(0, 44);
                if (($i+1) % 2 == 0) {
                    echo "<br>", "<strong>$array1[$i]</strong>";
                } else  echo "<br>", $array1[$i];
            }
            ?>
        </div>
        <div>
            <h2>
                2. Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А.
            </h2>
            <?php
            $array2 = [['America', 'USA', 'Canada', 'Argentina'],
                ['Europe', 'Germany', 'Sweden', 'Austria', 'Russia'],
                ['Asia', 'China', 'awesome, test solution for lower case strings']];
            for ($i = 0; $i < count($array2); $i++) {
                for ($j = 0; $j < count($array2[$i]); $j++) {
                    if (mb_stripos($array2[$i][$j], 'A') === 0) {
                        echo $array2[$i][$j]."<br>";
                    }
                }
            }
            ?>
        </div>
        <div>
            <h2>
                3. Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.
            </h2>
            <?php
            $x = mt_rand(2,5);
            $y = mt_rand(2,8);
            $counterRow = 0;
            $counterCol = 0;
            $array3 = [];
            for ($i = 0; $i < $x; $i++) {
                for ($j = 0; $j < $y; $j++) {
                    $array3[$i][$j] = mt_rand(0,44);
                    $counterCol = $j+1;
                }
                $counterRow = $i+1;
            }
            echo "Общее количество элементов в массиве: ".$counterRow * $counterCol;
            echo "<br>Количество подмассивов в массиве: $counterRow";
            echo "<br>Количество элементов в подмассиве: $counterCol";
            echo "<pre>";
            echo var_dump($array3);
            echo "</pre>";
            ?>
        </div>
        <hr>
        <h2>Решение на JavaScript:</h2>
        <div >
            <h2> 1. Создать массив размера n, заполненный случайными числами. Вывести каждый элемент массива с новой строки. Все четные элементы массива необходимо вывести жирным шрифтом.
            </h2>
            <div id="first-task"></div>
            <br>
            <p>Для генерации целых значений массива можно использовать Math.floor(Math.random() * 20), но не стал округлять, чтобы визуально было лучше видно выделенные длинные дробные числа</p>
        </div>
        <div >
            <h2>
                2. Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А.
            </h2>
            <div id="second-task"></div>
        </div>
        <div >
            <h2>
                3. Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.
            </h2>
            <div id="third-task"></div>
            <p>Сам массив выводится в консоль.</p>
        </div>
        <hr>
    </main>
    <?php
    require 'footer.php';
    ?>
    <script src="script.js"></script>
</body>
</html>


