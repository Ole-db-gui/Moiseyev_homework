<?php
    foreach($_COOKIE as $key => $value) setcookie($key, '');
    header("location:auth.php");
?>