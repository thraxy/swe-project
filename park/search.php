<!-- search script for parking -->

<?php
// Connect to the database
$db = new PDO($dsn, $user, $password);

$sql = file_get_contents('entries.sql');




$sql = "SELECT * FROM `entries`;";

// Get the search term
$searchTerm = $_GET['term'];

// Get matched data from skills table
$query = $db->query("SELECT * FROM parking WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");

// Generate skills data array
$skillData = array();
if($query->num_rows > 0){
    while($row = $qr = $db->exec($sql)){
        $data['id'] = $row['id'];
        $data['value'] = $row['name'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array
echo json_encode($skillData);
?>