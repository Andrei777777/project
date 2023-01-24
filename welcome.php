<?php

session_start();


if(isset($_SESSION["login"]) || $_SESSION["login"] !== true)


echo htmlspecialchars(($_SESSION["login"]));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Welcome to your site</h1>

<a href="logout.php" class="btn btn-danger ml-3"> Sign Out of your account</a>
<a href="post.php" class="btn btn-danger ml-3">Add Post</a>
</body>
</html>
