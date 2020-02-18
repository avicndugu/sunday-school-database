<?php

//connect to server and select database
require_once 'connect.php';

//$con = mysqli_connect("localhost", "root", "", "sunday_school");

if (isset($_POST['login'])) {
// Get values passed from the login form
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);



// Query the database for user
    $sql = "select*from users where email = '$email' and password = '$password'"
    or die("Failed to query database " . mysqli_error());
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if ($row['email'] == $email && $row['password'] == $password) {

        session_start();

        $_SESSION['email'] = $email;


        echo '<script> alert("you have logged in successfully"); window.location= "index.html"</script>';
    } else {
        echo '<script> alert("Wrong Email or password"); window.location= "login.html"</script>';

    }
}





