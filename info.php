<?php
require_once 'config/db.php';

$info_id = $_GET['id'];

$info = mysqli_query($connect, "select * from information where id = '$info_id '");
$info  = mysqli_fetch_assoc($info);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Information for clients</title>
</head>
<body>
<h2>ID: <?=$info['id']?></h2>
<p>Profession: <?= $info['profession']?></p>
<p>Firstname: <?= $info['firstname']?></p>
<p>Lastname: <?= $info['lastname']?></p>
<p>Email: <?= $info['email']?></p>
<p>Password: <?= $info['password']?></p>
<p>School: <?= $info['school']?></p>
<p>Date: <?= $info['date']?></p>
<p>Currentgrade: <?= $info['currentgrade']?></p>
<p>Online_search: <?= $info['online_search']?></p>

    <a href="main.php">Повернутися до загального списку</a>
    <a href="index.php">Повернутися на загальну сторніку</a>
</body>
</html>
