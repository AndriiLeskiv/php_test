<?php
$connect = mysqli_connect('localhost','root', '', 'testwork');

if (!$connect){
    die('Error connect to database!');
}