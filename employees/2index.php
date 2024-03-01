<?php
include "header.php";
$server="localhost";
$username="root";
$dbpass="";
$dbname="office";

$connection=mysqli_connect($server,$username, $dbpass, $dbname);
if($connection){
    $read="SELECT * FROM `employees`;";
    $result = mysqli_query($connection, $read);
    if($result){
        if(mysqli_num_rows($result) > 0){
?>
<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
        while ($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['Name']; ?></h5>
                    <p class="card-text">Age: <?php echo $row['Age']; ?></p>
                    <p class="card-text">City: <?php echo $row['City']; ?></p>
                    <p class="card-text">Qualification: <?php echo $row['Qualification']; ?></p>
                    <a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
        } else {
            echo "<script>alert('Record not found')</script>";
        }
    } else {
        echo "<script>alert('Failed to execute query')</script>";
    }
} else {
    die("Failed to connect");
}
?>
