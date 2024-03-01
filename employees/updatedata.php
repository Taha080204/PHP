<?php
require("connection.php");

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];
$qualification = $_POST['qualification'];

$update = "UPDATE `Employees` SET `Name` = '$name', `Age` = '$age', `City` = '$city', `Qualification` = '$qualification' WHERE id = $id";

$result = mysqli_query($connection, $update) or die("Failed to run Query.");

if ($result) {
    echo "<script>alert('Data Updated Successfully')</script>";
    header("location: index.php"); 
} else {
    echo "<script>alert('Sorry, Failed to update this record')</script>";
}
?>
