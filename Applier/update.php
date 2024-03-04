<?php
include "header.php";
require "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $getdata = "SELECT * FROM `Appliers` WHERE id='$id'";
    $result = mysqli_query($connection, $getdata) or die("Failed to run Query");

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);   
        $name = $row['Name'];
        $age = $row['Age'];
        $gender = $row['Gender'];
        $qualification = $row['Qualification'];
        $expectedsalary = $row['Expected Salary'];
?>
        <div class="container my_4">
            <h1 class="text-center">Update Applier Details</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="updatedata.php" method="post" class="form-group">
                                <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Hidden field to pass ID -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Employee Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Employee Name" value="<?php echo $name; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Employee Age</label>
                                    <input type="number" name="age" id="age" class="form-control" placeholder="Enter Employee Age" value="<?php echo $age; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Employee Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php if($gender == 'male') echo 'checked'; ?>>
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php if($gender == 'female') echo 'checked'; ?>>
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="qualification" class="form-label">Employee Qualification</label>
                                    <input type="text" name="qualification" id="qualification" class="form-control" placeholder="Enter Employee Qualification" value="<?php echo $qualification; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="expectedsalary" class="form-label">Expected Salary</label>
                                    <input type="text" name="expectedsalary" id="expectedsalary" class="form-control" placeholder="Enter Expected Salary" value="<?php echo $expectedsalary; ?>">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="update" id="update" class="btn btn-primary form-control" value="Update Details">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "<script>alert('ID not found');</script>";
    }
}
?>
