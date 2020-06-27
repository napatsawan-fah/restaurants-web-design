<!DOCTYPE html>
<html>
<head>
	<title> Update Product </title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
// Include database connection file
require_once "dbconnect.php";

$id = $_GET['id'];

$sql="SELECT id, product_code, product_name, standard_cost, list_price FROM products WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

?>
<!-- bootstrap form -->
	<div class="container">
<br> <br>
<h2>Update Product</h2> <br> <br>
<form action="update_dept.php" method="post">
<?php

while($row = mysqli_fetch_assoc($result)) {
		$id = $row["id"];
		$product_code = $row["product_code"];
		$product_name = $row["product_name"];
		$standard_cost = $row["standard_cost"];
		$list_price = $row["list_price"];

}
?>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id" value="<?= $id ?>" >

    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"> Product Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="product_code" value="<?= $product_code ?>" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="product_name" value="<?= $product_name ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"> Standard Cost</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name= "standard_cost" value="<?= $standard_cost ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"> List Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name= "list_price" value="<?= $list_price ?>">
    </div>
  </div> <br> <br>
  <div class="container">
  <input type="Submit" value = "Update Data">
</div>
   
  </div>
</form>
	</body>
</html>

