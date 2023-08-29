<?php
    session_start();
    unset($_SESSION['ID_USER']);
    header('location: http://dbv-shop.epizy.com/login');
?>