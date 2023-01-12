<?php

require('form.php');
require('connect.php');

$login = " ";
$password = " ";
$email = " ";
$result = " ";

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if ($result) {
        echo $smsg = "welcome $login";
    } else {
        $fsmsg = "Error";
    }
}

$filename = "users.txt";
$text = ("form.php");
file_put_contents('users.txt', '$text');
session_start();
