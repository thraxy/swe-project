<!-- search script for parking -->

<?php

// variables for connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "entries";

// connect to database
$conn = mysqli_connect($server, $user, $pass, $db);

// select database
mysqli_select_db("entries");

// get search term
$searchTerm = $_POST['search'];

// get matched data from database
$query = mysqli_query("select * from entries", $connection);
$db = mysqli_query("select * from address", $connection);

// fetch data
<span name: </span> 
    <?php echo $row['name']; ?>
<span address: </span>
    <?php echo $row['address']; ?>
<span city: </span>
    <?php echo $row['city']; ?>
<span state: </span>
    <?php echo $row['state']; ?>
<span zip: </span>
    <?php echo $row['zipcode']; ?>

mysqli_close($connection);

?>

