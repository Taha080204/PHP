<?php
require("connection.php");

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$expectedsalary = $_POST['expectedsalary'];

$update = "UPDATE `Appliers` SET `Name` = '$name', `Age` = '$age', `Gender` = '$gender', `Qualification` = '$qualification', `Expected Salary` ='$expectedsalary' WHERE id = $id";

$result = mysqli_query($connection, $update) or die("Failed to run Query.");

if ($result) {
    echo "<script>alert('Data Updated Successfully')</script>";
    header("location: 2index.php"); 
} else {
    echo "<script>alert('Sorry, Failed to update this record')</script>";
}
?>
