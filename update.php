<?php
require_once 'config/db.php';

$info_id = $_GET['id'];

$info = mysqli_query($connect, "select * from information where id = '$info_id'");
$info  = mysqli_fetch_assoc($info);
?>
<form method="POST" name="formValidation" id="formValidation" action="vendor/update.php">
    <input type="hidden" name="id" value="<?=$info_id?>">
    <br/>
    <div class="profession required">
        <label class="radio-inline"><input type="radio" name="profession" class="form-contorl"/>Student</label>
        <label class="radio-inline"><input type="radio" name="profession" class="form-contorl"/>Parent</label>
        <label class="radio-inline"><input type="radio" name="profession" class="form-contorl"/>Counselor</label>
        <label class="radio-inline"><input type="radio" name="profession" class="form-contorl"/>Other</label>
    </div>
    <input type = "text" class="form-control form-control-lg required" name = "firstname" placeholder = "First Name" value="<?= $info['firstname']?>"/>
    <br/>
    <input type = "text" class="form-control form-control-lg required" name = "lastname" placeholder = "Last Name" value="<?= $info['lastname']?>"/>
    <br/>
    <input type = "email" class = "form-control form-control-lg required" name = "email" placeholder = "Email Address" value="<?= $info['email']?>"/>
    <br/>
    <input type = "password" class = "form-control form-control-lg required" name = "password" placeholder = "Password" id = "password" value="<?= $info['password']?>"/>
    <br/>
    <input type = "password" class = "form-control form-control-lg required" name = "confirm" placeholder = "Confirm Password" value="<?= $info['confirm']?>"/>
    <br/>
    <select class = "form-control form-control-lg required" name = "school" value="<?= $info['school']?>">
        <option value="School" selected="" disabled="">School</option>
        <option value="High School1">High School 1 </option>
        <option value="High School1">High School 2</option>
        <option value="High School3">High School 3</option>
        <option value="High School4">High School 4</option>
    </select>
    <br/>
    <select class = "form-control form-control-lg required" name="currentgrade"  value="<?= $info['currentgrade']?>">
        <option value="Current Grade/Year in School" selected="" disabled="">Current Grade/Year in School</option>
        <option value="High School Freshman1">High School Freshman 1</option>
        <option value="High School Freshman2">High School Freshman 2</option>
        <option value="High School Freshman3">High School Freshman 3</option>
        <option value="High School Freshman4">High School Freshman 4</option>
    </select>
    <br/>
    <input type="text" id="datepicker" class="form-control form-control-lg required" name="date" placeholder="Date" value="<?= $info['date']?>">
    <br/>
    HOW DID YOU HEAR ABOUT US:
    <br/>
    <select class = "form-control form-control-lg" name = "online_search" value="<?= $info['online_search']?>">
        <option value="Online_search1" selected="" disabled="">Online search1</option>
        <option value="Online_search2">Online search2</option>
        <option value="Online_search3">Online search3</option>
        <option value="Online_search4">Online search4</option>
        <option value="Online_search5">Online search5</option>
    </select>
    <br/>
    <br/>
    <input type="submit" class="btn btn-danger form-control-lg px-5" value="Update">
</form>
<a href="index.php">Повернутися на загальну сторніку</a>
