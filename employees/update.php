<?php
include "header.php";
require "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $getdata = "SELECT * FROM `employees` WHERE id='$id'";
    $result = mysql_query($getdata, $connection) or die("Failed to run Query");

    if(mysql_num_rows($result) == 1) {
        $row = mysql_fetch_array($result);   
        $name = $row['Name'];
        $contact = $row['contact'];
        $city = $row['city'];
?>
        <div class="container my_4">
            <h1 class="text-center">Enter Employee Details</h1>
            <form action="updatedata.php" method="post" class="form-group">
                <input type="text" name="name" class="form-control my-2" placeholder="Enter Employee Name" value="<?php echo $name; ?>">
                <input type="text" name="contact" class="form-control my-2" placeholder="Enter Employee Contact" value="<?php echo $contact; ?>">
                <input type="text" name="city" class="form-control my-2" placeholder="Enter Employee City" value="<?php echo $city; ?>">
                <input type="submit" name="Update" class="form-control btn btn-primary my-2">
            </form>
        </div> 
<?php
    } else {
        echo "<script>alert('ID not found');</script>";
    }
}
?>
