<?php
session_start();

unset($_SESSION['MEMBER']);

header('Location: http://localhost/aWibu/index.php?page=views/menu_page/home');
