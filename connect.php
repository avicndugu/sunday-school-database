<?php

/*statement of valuables*/

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sunday_school";

/*connecting to server*/
$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    die('could not connect: ' . mysqli_error($con));
}

?>

