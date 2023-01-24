
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<container>
    <form action="welcome.php" method="POST">
        <input type="text" name="id_user" placeholder="id_user" required>
        <input type="text" name="title" placeholder="title" required>
        <input type="text" name="img" placeholder="img" required>
        <input type="text" name="status" placeholder="status" required>
        <input type="text" name="data_create" placeholder="data_create" required>
        <button type="submit" name="button"><a href="welcome.php">Public</a></button>
    </form>
</container>

</body>
</html>

<?php

require ('cennectpost.php');

global $db1;

$id_user = '';
$title = '';
$img = '';
$content = '';
$status = '';
$data_create = '';



if (isset($_POST['id_user']) && isset($_POST['title']) && isset($_POST['img']) && isset($_POST['content']) && isset($_POST['status']) && isset($_POST['data_create'])) {

    $sql1 = "
        INSERT INTO 
            post 
                (id_user, title, img, content,  status, data_create )
        VALUES 
            ('{$id_user}', '{$title}', '{$img}', '{$content}''{$status}', '{$data_create}')
    ";



    $id_user = $_POST['user'];
    $title = $_POST['title'];
    $img = $_POST['img'];
    $content = $_POST['content'];
    $status = $_POST['status'];
    $data_create = $_POST['data_create'];

    if ($db1->getConnection1()->query($sql1) === TRUE) {
        echo "publiced <br>";
    } else {
        echo "Error: " . $sql1 . "<br>" . $db1->getConnection1()->error;
    }

}




