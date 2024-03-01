<?php
include "header.php";
require "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $getdata = "SELECT * FROM `Employees` WHERE id='$id'";
    $result = mysqli_query($connection, $getdata) or die("Failed to run Query");

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);   
        $name = $row['Name'];
        $age = $row['Age'];
        $city = $row['City'];
        $qualification = $row['Qualification'];
?>
        <div class="container my_4">
            <h1 class="text-center">Update Employee Details</h1>
            <form action="updatedata.php" method="post" class="form-group">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="text" name="name" class="form-control my-2" placeholder="Enter Employee Name" value="<?php echo $name; ?>">
                <input type="number" name="age" class="form-control my-2" placeholder="Enter Employee Age" value="<?php echo $age; ?>">
                <input type="text" name="city" class="form-control my-2" placeholder="Enter Employee City" value="<?php echo $city; ?>">
                <input type="text" name="qualification" class="form-control my-2" placeholder="Enter Employee Qualification" value="<?php echo $qualification; ?>">
                <input type="submit" name="Update" class="form-control btn btn-primary my-2">
            </form>
        </div> 
<?php
    } else {
        echo "<script>alert('ID not found');</script>";
    }
}
?>
