<?php
require_once '../config/db.php';

$profession = $_POST['profession'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$school = $_POST['school'];
$currentgrade = $_POST['currentgrade'];
$date = $_POST['date'];
$online_search = $_POST['online_search'];

mysqli_query($connect, "insert into information(profession, firstname, lastname, email, password, confirm, school, currentgrade, date, online_search)
value ('$profession', '$firstname', '$lastname', '$email', '$password', '$confirm', '$school', '$currentgrade', '$date', '$online_search')");

header('Location: ../main.php');
