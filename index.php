<?php

//https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
require('form.php');
require('connect.php');


$login = " ";
$password = " ";
$email = " ";
$result = " ";

global $db;

if (isset($_POST['login']) && isset($_POST['password'])) {

    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    $sql = "
        INSERT INTO 
            proiect 
                (login, password, email)
        VALUES 
            ('{$login}', '{$password}', '{$email}')
    ";

    if ($db->getConnection()->query($sql) === TRUE) {
        echo "New User created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $db->getConnection()->error;
    }


    if ($result) {
        echo $smsg = "welcome $login";
    } else {
        $fsmsg = "Error";
    }
}

