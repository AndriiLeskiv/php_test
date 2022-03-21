<?php
require_once '../config/db.php';

$id = $_POST['id'];
$profession = $_POST['profession'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm= $_POST['confirm'];
$school = $_POST['school'];
$currentgrade = $_POST['currentgrade'];
$date = $_POST['date'];
$online_search = $_POST['online_search'];

mysqli_query($connect,"update information set profession = '$profession', firstname = '$firstname', 
                       lastname = '$lastname', email = '$email', password = '$password',
                       confirm = '$confirm', school = '$school', currentgrade = '$currentgrade', 
                       date = '$date',  online_search = '$online_search' where id = '$id'");

header('Location: ../main.php');
