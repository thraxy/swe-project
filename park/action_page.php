<!-- action page -->
<?php
// define variables and set to empty values
//$nameErr = $addressErr = $numberErr = "";
$name = $address = $number = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
   // $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["address"])) {
//$addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

}
  ?>
