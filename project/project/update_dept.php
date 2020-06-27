<?php
if(empty(trim($_POST["id"]))){
  // URL doesn't contain id parameter. Redirect to error page
  // header("location: error.php");
  exit();
}
else{

// Include database connection file
require_once "dbconnect.php";

$id = $_POST["id"];
$product_code = $_POST["product_code"];
$product_name = $_POST["product_name"];
$standard_cost = $_POST["standard_cost"];
$list_priceR = $_POST["list_price"];

$sql="UPDATE products SET product_code = '$product_code', product_name = '$product_name', standard_cost = '$standard_cost' , list_price = '$list_price' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if (!$result)
  {
  die('Error: ' . mysql_error($conn));
  }
else {
    header("location: read_table_bootstrap.php");
}
mysqli_close($conn);
}

?>

