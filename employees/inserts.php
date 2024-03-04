<?php
require("connection.php");

if(isset($_POST['Add'])){

    $name = $_POST['name'];
    $age = $_POST['age']; 
    $city = $_POST['city'];  
    $qualification = $_POST['qualification'];  

    $insert = "INSERT INTO `Employees` (`Name`, `Age`, `City`, `Qualification`) VALUES ('$name', '$age', '$city', '$qualification')";
    $result = mysqli_query($connection, $insert);

    if ($result){
        echo "<script>alert('Employee data added successfully')</script>";
    } else {
        echo "<script>alert('Sorry, Failed to insert this record. Please try again later.')</script>";
        echo "Error: " . $insert . "<br>" . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div  class="container my_4">
 <h1 class="text-center">Enter Employees Details</h1>
 <form action="" method="post" class="form-group">
  <input type="text" name="name" id="" class="form-control my-2" placeholder="Enter Employee Name">
  <input type="number" name="age" id="" class="form-control my-2" placeholder="Enter Employee Age">
  <input type="text" name="city" id="" class="form-control my-2" placeholder="Enter Employee City">
  <input type="text" name="qualification" id="" class="form-control my-2" placeholder="Enter Employee Qualification">
  <input type="submit" name="Add" id="" class="form-control btn btn-primary my-2">
 </form>
</div>
</body>
</html>
