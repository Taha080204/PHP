<?php
require("connection.php");

if(isset($_POST['Add'])){

    $name = $_POST['name'];
    $age = $_POST['age']; 
    $gender = $_POST['gender'];  
    $qualification = $_POST['qualification'];  
    $expectedsalary = $_POST['expectedsalary'];  

    $insert = "INSERT INTO `Appliers` (`Name`, `Age`, `Gender`, `Qualification`,`Expected Salary`) VALUES ('$name', '$age', '$gender', '$qualification', '$expectedsalary')";
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
<div class="container my_4">
    <h1 class="text-center">Enter Employee Details</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" class="form-group">
                        <div class="mb-3">
                            <label for="name" class="form-label">Employee Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Employee Name">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Employee Age</label>
                            <input type="number" name="age" id="age" class="form-control" placeholder="Enter Employee Age">
                        </div>
                        
                        <div class="mb-3">
    <label for="gender" class="form-label">Employee Gender</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
        <label class="form-check-label" for="male">
            Male
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
        <label class="form-check-label" for="female">
            Female
        </label>
    </div>
</div>

                        <div class="mb-3">
                            <label for="Qualification" class="form-label">Enter Employees Qualification</label>
                            <input type="text" name="qualification" id="qualification" class="form-control" placeholder="Qualification">
                        </div>
                        <div class="mb-3">
                            <label for="Expectedsalary" class="form-label">Expected Salary</label>
                            <input type="text" name="expectedsalary" id="expectedsalary" class="form-control" placeholder="Expected Salary">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="Add" id="Add" class="btn btn-primary form-control" value="Add Employee">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
