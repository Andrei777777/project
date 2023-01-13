<?php

session_start();
require('formin.php');
require('connect.php');

$login = " ";
$password = " ";
$result = " ";

if (isset($_POST['login']) and isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
}
