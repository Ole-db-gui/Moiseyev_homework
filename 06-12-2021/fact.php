<?php
    $namePage = 'Факт';
    setcookie('lastVisited', $namePage, time() + 3600 * 24 * 5);
    header("location:https://fact.digital/");
?>
