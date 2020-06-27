<?php
if(empty(trim($_GET["id"]))){
  // URL doesn't contain id parameter. Redirect to error page
  // header("location: error.php");
  exit();
}
else{

// Include database connection file
require_once "dbconnect.php";

$id = $_GET["id"];

$sql="DELETE FROM products WHERE id = '$id' ";

$result = mysqli_query($conn,$sql);

if (!$result){
  die('Error: ' . mysqli_error($conn));
}
else {
  header("location: read_table_bootstrap.php");
}
mysqli_close($conn);
}

?>


