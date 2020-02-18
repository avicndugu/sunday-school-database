<?php


/*statement of valuables*/
require_once 'connect.php';

/*retrieving the data entered into the form*/

$value1 = $_POST['name'];
$value2 = $_POST['phone_1'];
$value3 = $_POST['phone_2'];
$value4 = $_POST['dob'];

$value5 = $_POST['age'];

// Get image name
$value6 = $_FILES['photo']['name'];
// image file directory
$target = "img/" . basename($value6);
// Upload file to server
move_uploaded_file($_FILES['photo']['tmp_name'], $target);


/*inserting data into the table in the database*/

$sql = "INSERT INTO users
(name, phone_1, phone_2, dob, age, photo)
VALUES
('$value1', '$value2', '$value3', '$value4', '$value5', '$value6')";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
} else {
//echo 'Registered successfully'
//header("location:index.html");
    echo '<script> alert(" You have successfully added a students to the databse"); window.location= "add-student.html"</script>';
}



