<?php
require_once '../config/db.php';

$id = $_GET['id'];

mysqli_query($connect, "delete from information where id = '$id'");

header('Location: ../main.php');
