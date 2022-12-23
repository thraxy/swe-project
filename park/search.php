<!-- search script for parking -->

<?php

// variables for connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "parking_facilities_db";

// connect to database
$conn = mysqli_connect($server, $user, $pass, $db);

// select database
mysqli_select_db($conn, "parking_facilities_db");

// get search term
$searchTerm = $_POST['search'];

// get matched data from database
// $query = mysqli_query($conn, "select * from entries");
// $db = mysqli_query($conn, "select * from entries where name like '%".$searchTerm."%'");
$query = mysqli_query($conn, "select * from entries where name like '%".$searchTerm."%' or address like '%".$searchTerm."%' or city like '%".$searchTerm."%' or state like '%".$searchTerm."%' or zipcode like '%".$searchTerm."%'");

// fetch data
while ($row = mysqli_fetch_assoc($query)){
    ?>
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
<?php 
}

mysqli_close($conn);

?>


