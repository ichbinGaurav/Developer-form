<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer form</title>
    <script src="jquery-3.6.0.min.js"></script>

    <?php include 'script.php' ?>   
</head>

<?php

include 'dbcon.php';

if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $age = mysqli_real_escape_string($con,$_POST['age']);
    $gender = mysqli_real_escape_string($con,$_POST['gender']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $contact = mysqli_real_escape_string($con,$_POST['contact']);
    $linkedin = mysqli_real_escape_string($con,$_POST['linkedin']);
    $uname = mysqli_real_escape_string($con,$_POST['uname']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);
    $repass = mysqli_real_escape_string($con,$_POST['repass']);
    $language = mysqli_real_escape_string($con,$_POST['language']);
    $state = mysqli_real_escape_string($con,$_POST['state']);
    $city = mysqli_real_escape_string($con,$_POST['city']);

    $sql = "
    INSERT INTO form(name, age, gender, email, contact, linkedin, uname, pass, repass, language, state, city, date) VALUES ('$name', '$age', '$gender', '$email', '$contact', '$linkedin', '$uname', '$pass', '$repass', '$language', '$state', '$city', current_timestamp());";

    $iquery = mysqli_query($con,$sql);

    if($iquery)
    {
        ?>
        <script>
            alert("Inserted successfull");
        </script>
        <?php
    }
    else
    {
         ?>
        <script>
            alert("NO inserted.");
        </script>
        <?php
    }
}
?>

<body>
    <div id="header">
        <center><strong>
                <h1>IT Developer</h1>
            </strong></center>
    </div>
    <hr>
    <br>
    
    <form action="index.php" method="post" id="applyForm">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" pattern="[a-zA-Z\s]{3,}" title="Name not Valid"><span id="nameErr"></span>
        <br><br>

        <label for="age">Age</label>
        <input id="age" name="age" type="number" min="20" max="50"><span id="ageErr"></span>
        <br><br>

        <label for="gender">Gender</label>
        <input id="male" name="gender" class="gender" type="radio" name="gender" value="Male">Male
        <input id="female" name="gender" class="gender" type="radio" name="gender" value="Female">Female<span id="genderErr"></span>
        <br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email"><span id="emailErr"></span>
        <br><br>

        <label for="contact">Contact</label>
        <input id="contact" name="contact" type="tel" pattern="[6789]{1}[0-9]{9}" title="Contact not Valid"><span
            id="contactErr"></span>
        <br><br>

        <label for="linkedin_url">LinkedIn URL</label>
        <input type="url" name="linkedin" id="linkedIn_URL" title="Not valid URL"><span id="urlErr"></span>
        <br><br>

        <label for="username">Username</label>
        <input type="text" id="username" name="uname" pattern="[a-z]{1}[A-Za-z0-9]{4,}" title="Username not Valid"><span
            id="usernameErr"></span>
        <br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="pass"
            pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$"><span id="passwordErr"></span>
        <br>
        <input type="checkbox" onclick="showPass()">Show Password
        <br><br>

        <label for="password-repeat">Re-enter Password</label>
        <input type="password" name="repass" id="re-enter_password"><span id="re-enterErr"></span>
        <br>
        <input type="checkbox" onclick="showRepeatPass()">Show Repeat Password
        <br><br>

        <label for="languages_known">Languages Known</label>
        <input type="checkbox" name="language" class="languages" value="C"> C
        <input type="checkbox" name="language" class="languages" value="C++"> C++
        <input type="checkbox" name="language" class="languages" value="Java"> Java
        <input type="checkbox" name="language" class="languages" value="Python"> Python
        <span id="languagesErr"></span>
        <br><br>

        <label for="state">State</label>
        <select id="state" name="state">
            <option value="default">--- Select State ---</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Utter Pradesh">Utter Pradesh</option>
            <option value="Rajasthan">Rajasthan</option>
        </select>
        <span id="stateErr"></span>
        <br><br>

        <label for="city">City</label>
        <select name="city" id="city">
            <option value="default">--- Select City ---</option>
        </select>
        <span id="cityErr"></span>
        <br><br>

        <button type="submit" name="submit" id="apply" >Submit</button>
    </form>

    <div id="res"></div>
</body>
<html>