<?php require_once 'config/db.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information for clients</title>
    <style>
        th, td{
            padding: 10px;
        }

        th{
            background: #606060;
            color: white;
        }

        td{
            background: #b5b5b5;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Profession</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
        <th>Confirm password</th>
        <th>School</th>
        <th>Currentgrade</th>
        <th>Date</th>
        <th>Online_search</th>
    </tr>
    <?php
    $information =mysqli_query($connect, "SELECT * FROM information");
    $information = mysqli_fetch_all($information);

    foreach ($information as $info){?>
        <tr>
            <td><?= $info[0]?></td>
            <td><?= $info[1]?></td>
            <td><?= $info[2]?></td>
            <td><?= $info[3]?></td>
            <td><?= $info[4]?></td>
            <td><?= $info[5]?></td>
            <td><?= $info[6]?></td>
            <td><?= $info[7]?></td>
            <td><?= $info[8]?></td>
            <td><?= $info[9]?></td>
            <td><?= $info[10]?></td>
            <td><a href="info.php?id=<?=$info[0] ?>">View</a></td>
            <td><a href="update.php?id=<?=$info[0] ?>">Update</a></td>
            <td><a style="color: red" href="vendor/delete.php?id=<?=$info[0] ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>
<a href="index.php">Повернутися на загальну сторніку</a>
</body>
</html>

