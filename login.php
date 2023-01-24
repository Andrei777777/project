<?php

session_start();

require ('formin.php');



if (isset($_SESSION['login']) && $_SESSION['password'] === true){
    header("location:welcome.php");

}


