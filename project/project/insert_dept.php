<?php
// Include database connection file
require_once "dbconnect.php";

// Get data from input form
$id = $_POST["id"];
$product_code = $_POST["product_code"];
$product_name = $_POST["product_name"];
$standard_cost = $_POST["standard_cost"];
$list_priceR = $_POST["list_price"];


// Insert data
$sql="INSERT INTO products(id, product_code, product_name, standard_cost, list_price) 
VALUES ('$id', '$product_code', '$product_name','$standard_cost','$list_price')";
$result=mysqli_query($conn, $sql);

if (!$result){
  die('Error: ' . mysqli_error($conn));
}
else {
  header("location: read_table_bootstrap.php");
}
mysqli_close($conn);

?>