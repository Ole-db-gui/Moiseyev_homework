<?php
    require 'background.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт студента 7ой группы ФАКТ</title>
    <link rel="stylesheet" href="styles/styles.css">

</head>
<body>
        <?php
            require 'header.php'
        ?>
    <main>
        <div class="block_about">
            <div class="block_about-photo">
                <img src="img/photo.png" alt="photo">
            </div>
            <div class="block_about-text">
                <div class="block_about-name">
                    <?php
                        $name = '<p>Приветствую! Меня зовут Владимир!</p>';
                        echo $name;
                    ?>
                </div>
                <div class="block_about-info">
                    <?php
                        $aboutInfoString = '<span>Мне 26 лет, ранее несколько лет проектировал автоматизированные системы управления для металлургических заводов в одном из крупнейших проектных институтов нашей страны.</span>
                    <span>Хочу изучить необходимый стек технологий и получить приглашение присоединиться в компанию ФАКТ в качестве разработчика. </span>
                    <span>В процессе подготовки изучал следующие технологии:</span>
                    <ul>
                        <li>HTML, CSS, JavaScript, React</li>
                        <li>Основы ООП</li>
                        <li>GIT, Figma, Photoshop, Webpack</li>
                        <li>HTTP-запросы</li>
                    </ul>
                    <p>Примеры кода можно посмотреть <a href="https://github.com/Ole-db-gui" target="_blank">здесь. </a></p>
                    <p>Основным хобби является саморазвитие как ментальное, так и физическое. Стараюсь расширять кругозор и развиваться каждый день. </p>
                    <p>Также представляют интерес: разные виды спорта, финансовая грамотность и инвестирование, прогулки и котики. </p>';
                        $aboutInfoArray = explode('.', $aboutInfoString);
                        $aboutInfoArray[0] = "<span style='color:darkorange'>$aboutInfoArray[0]</span>";
                        $aboutInfo = implode('. ', $aboutInfoArray);
                        echo $aboutInfo;
                    ?>
                </div>
                <div class="block_about-feedback">
                    <?php
                        $feedbackString = '<p>Благодарю за предоставленную возможность обучения и потенциального трудоустройства в вашу компанию!</p>
                    <p>Изучив структуру курса, включая вынесенные на собственное прохождение объемы курсов по системам Bitrix, можно сделать вывод, что протяженность курса обучения 3 месяца - является оптимальной. С одной стороны может показаться, что материала
                        для изучения очень много и он подается сжато, а с другой стороны по структуре курс выстроен очень хорошо и логично. При усердном подходе и полной фокусировке - возможно освоить необходимый стек технологий для трудоустройства разработчиком.</p>
                    <p>Решение организовать обучение удаленно является плюсовым, так как каждый находится на своём комфортном рабочем месте и не тратит времени на дорогу до аудитории, при этом нет никакого ущерба качеству обучения.</p>';
                        $feedbackArray = explode(' ', $feedbackString);
                        foreach ($feedbackArray as $item => $element) {
                            ($item % 2 === 0) ? $feedbackArray[$item] = "<span style='color:saddlebrown'>$element</span>" : $feedbackArray[$item] = "<span style='color:red'>$element</span>";
                        }
                        $feedback = implode(' ', $feedbackArray);
                        echo $feedback;
                    ?>
                </div>
            </div>
        </div>

        <div class="container_breed" id="flex">
            <?php
                $titleBreed = '<h3>Немного о породах кошек</h3>';
                echo $titleBreed; ?>
            <div class="container_breed-view">
                <div class="card">
                    <div class="block_cat-photo">
                        <a href="https://ru.wikipedia.org/wiki/%D0%90%D0%B1%D0%B8%D1%81%D1%81%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F_%D0%BA%D0%BE%D1%88%D0%BA%D0%B0" target="_blank" title="подробнее о породе"><img src="img/abissinskaya.jpg" alt="abissinkaya"></a>
                    </div>
                        <div class="info_text">
                            <?php
                                $abissinskaya = 'Абисси́нская кошка — порода домашних кошек, выведенная в Великобритании в конце XIX века на основе аборигенных пород кошек Восточной Африки и Юго-Восточной Азии. Абиссинская — одна из самых древних пород кошек и одновременно одна из
                            первых пород, получивших официальный выставочный стандарт. Абиссинская кошка имеет стройное, гармонично сложенное тело и обладает необычной, красочной шерстью с ярко выраженным тикингом. Взрослая кошка средних размеров, вес животного
                            в среднем от 3 до 6 кг.';
                                echo $abissinskaya;
                            ?>
                        </div>
                </div>
                <div class="card">
                    <div class="block_cat-photo">
                        <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%B0%D0%B2%D0%B0%D0%BD%D0%BD%D0%B0_(%D0%BF%D0%BE%D1%80%D0%BE%D0%B4%D0%B0_%D0%BA%D0%BE%D1%88%D0%B5%D0%BA)" target="_blank" title="подробнее о породе"><img src="img/savannah.jpg" alt="savannah"></a>
                    </div>
                        <div class="info_text">
                            <?php
                                $savannah = 'Саванна (кошка) — порода кошек. Гибрид домашней кошки и африканского сервала. Саванна является крупной кошкой. Её рост в холке достигает 60 см, а вес доходит до 15 кг. Отличительные особенности саванны — продолговатое тело, вытянутая
                            шея, длинные лапы, большие округлые уши и густая пятнистая шерсть. От других пород отличается более развитым интеллектом. Саваннам нужно около 3 лет, чтобы достичь своего максимального размера. Окрасы у породы: бурый, шоколадный,
                            серебристый, золотистый или циннамон тэбби.';
                                echo $savannah;
                            ?>
                        </div>
                </div>
                <div class="card">
                    <div class="block_cat-photo">
                        <a href="https://ru.wikipedia.org/wiki/%D0%90%D0%BD%D0%B3%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F_%D0%BA%D0%BE%D1%88%D0%BA%D0%B0" target="_blank" title="подробнее о породе"><img src="img/angorskaya.png" alt="angorskaya"></a>
                    </div>
                        <div class="info_text">
                            <?php
                                $angorskaya = 'Анго́рская ко́шка, или турецкая анго́ра, — порода домашних кошек, которая была создана европейскими и американскими селекционерами на основе группы особей, вывезенных из Зоопарка Анкары (Турция) в середине XX века. На сегодняшний день ангорская кошка
                            признана почти всеми международными фелинологическими организациями, включая FIFe, CFA, TICA, WCF и многими другими. Вместе с тем полудлинношёрстные кошки, привезённые в Европу из древнего византийского города Ангора были известны
                            в Европе ещё начиная с XVI века.';
                                echo $angorskaya;
                            ?>
                        </div>
                </div>
                <div class="card">
                    <div class="block_cat-photo">
                        <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%BE%D1%80%D0%B0%D1%82_(%D0%BA%D0%BE%D1%88%D0%BA%D0%B0)" target="_blank" title="подробнее о породе"><img src="img/korat.png" alt="korat"></a>
                    </div>
                    <div class="info_text">
                        <?php
                            $korat = 'Кора́т — порода домашней кошки родом из Таиланда, одна из древнейших пород кошек. Размерами и окрасом напоминает русскую голубую кошку, но мех кошек породы Корат скорее одинарный, чем двойной. У их глаз — не изумрудно-зелёный, а оливково-зелёный
                        цвет. Для кошек данной породы одновременно характерны требовательный и настойчивый характер и большие выразительные глаза, придающие морде невинное выражение. Впрочем, зелёными глаза становятся только на 2-4-м годах жизни.';
                            echo $korat;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_color" id="grid">
            <?php
                $titleColor = '<h3>Немного об окрасах кошек</h3>';
                echo $titleColor; ?>
            <div class="container_color-view">
                <div class="card">
                    <div class="block_cat-photo">
                        <a href="https://koshkidarom.ru/colors.html" target="_blank" title="подробнее об окрасе"><img src="img/solid-black.png" alt="solid"></a>
                    </div>
                    <div class="info_text">
                        <?php
                            $solid = '<p>Существует два базовых окраса кошек – чёрный и красный (рыжий).</p>
                        <p>Оба окраса формируются благодаря действию специального пигмента, меланина. Меланин бывает двух видов: один из них отвечает за чёрный окрас и называется эумеланином , а другой отвечает за красный окрас и называется феомеланином
                                .
                        </p>
                        <p>Чёрные окрасы определяются следующими генами:</p>
                        <ul>
                                <li>B (black) – чёрный,</li>
                                <li>b (brown) – коричневый,</li>
                                <li>bl (brown light) – светло-коричневый.</li>
                        </ul>';
                            echo $solid;
                        ?>

                    </div>
                </div>
                <div class="card">
                    <div class="block_cat-photo">
                        <a href="https://vplate.ru/koshki/aziatskaya-tabbi/" target="_blank" title="подробнее об окрасе"><img src="img/tabby.png" alt="tabby"></a>
                    </div>
                    <div class="info_text">
                        <?php
                            $tabby = '<p>Шерсть у представителей породы азиатская табби короткая и плотная. По структуре можно сравнить её с шубой. Шёрстка приятная на ощупь и отличается сильным блеском, который особенно хорошо заметен под лучами солнца.</p>
                        <p>Палитра цветов азиатских табби довольно широкая, в ней присутствуют как светлые, так и тёмные тона. Если говорить об узорах на шерсти, то выделяют следующие типы окрасов.</p>
                        <ul>
                            <li>Мраморный – по бокам на корпусе имеются симметричные узоры. По форме они напоминают спирали или разводы на мраморе.</li>
                            <li>Пятнистый – по всему туловищу, которое обычно имеет светлый оттенок, хаотично разбросаны тёмные пятна разных размеров.</li>
                            <li>Тигровый – оттенок шерсти чаще всего светлый. На корпусе расположены тёмные вертикальные линии, которые параллельны по отношению друг к другу.</li>
                        </ul>';
                            echo $tabby;
                        ?>
                    </div>
                </div>
                <div class="card">
                    <div class="block_cat-photo">
                        <a href="https://koshkidarom.ru/colors.html" target="_blank" title="подробнее об окрасе"><img src="img/white.png" alt="white"></a>
                    </div>
                    <div class="info_text">
                        <?php
                            $white = '<p>Белый цвет кошки чаще всего определяется наличием доминантного гена W. Этот ген блокирует работу других, "цветных" генов ( В , Т , А , О и т.д.). Однако эти гены присутствуют у любой белой кошки и могут проявляться в потомстве.
                        Они проявляются также наличием небольших цветных пятнышек на голове у белых котят. К году эти пятнышки исчезают. </p>
                        <p>Ген белого окраса также влияет на пигментацию глаз и может вызывать нарушения слуха. По другой версии, этот ген не сам вызывает глухоту, а оказывается сцеплённым с генами, её вызывающими. </p>';
                            echo $white;
                        ?>
                    </div>
                </div>
                <div class="card">
                    <div class="block_cat-photo">
                        <a href="https://kot-pes.com/seryy-kot/" target="_blank" title="подробнее об окрасе"><img src="img/gray.png" alt="gray cat"></a>
                    </div>
                    <div class="info_text">
                        <?php
                            $russianBlue = '<p>Русская голубая кошка — это необыкновенное животное с покладистым и уравновешенным характером. Кроме того, животные обладают шикарной внешностью, главными достоинствами которой являются серо-голубая шерсть с неповторимым серебристым
                            оттенком и необычные круглые глаза насыщенного зелёного цвета. Представители этой породы могут быть только короткошёрстными.
                        </p>
                        <p>Идеальный окрас, с точки зрения фелинологических ассоциаций, должен быть равномерного серо-голубого цвета с лёгким серебристым типпингом. Окрас шерсти и её структура являются отличительными признаками породы, поэтому к ним предъявляются
                            достаточно жёсткие требования. Цвет должен быть однотонным, без вкраплений, пятен, разводов и желтизны.
                        </p>';
                            echo $russianBlue;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="black-line">
            <?php
                $totalStringWords = $name.$aboutInfo.$feedback.$titleBreed.$abissinskaya.$savannah.$angorskaya.$korat.$titleColor.$solid.$tabby.$white.$russianBlue;
                function countWords($string) {
                    $totalWords = str_word_count($string);

                    echo "<p>Слов на странице по мнению PHP: $totalWords</p>";
                }

                function countVowels($string) {
                    $totalVowels = preg_match_all('/[аеёиоуыэюяaeiou]/iu', $string);

                    echo "<p>Гласных букв на странице по мнению PHP: $totalVowels</p>";
                }

                function daysFromBirthday ($bDay) {
                    $date = explode('-',$bDay);
                    $current_date = explode('-', date('d-m-Y'));
                    $diff = ($current_date[0]-$date[0])+($current_date[1]-$date[1])*30.43+($current_date[2]-$date[2])*365.25;
                    $diff = (int)$diff;
                    $dateAndTime = date('D, d-M-Y H:i');

                    echo "<p>Мне $diff дней</p>";
                    echo "<p>Сейчас: $dateAndTime</p>";
                }
                countVowels($totalStringWords);
                countWords($totalStringWords);
                daysFromBirthday('11-01-1995');
            ?>
        </div>
    </main>
        <?php
        require 'footer.php';
        ?>
        <script src="strings.js"></script>
</body>

</html>