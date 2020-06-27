<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title> Read Data from Database </title>
</head>

<body>

<?php
// Include database connection file
require_once "dbconnect.php";

// Database query.
$sql = "SELECT id, product_code, product_name, standard_cost, list_price FROM products ORDER BY id";

$result = mysqli_query($conn,$sql);
?>

<div class="container">
<div class = "page-header">
	<br><br><h2>Products Data</h2>
</div>
<div class="float-right">
	<a href="input_insert_dept.php" class="btn btn-success" role="button">Add New Product</a>
</div>

<table class="table table-striped">
<tr>
	<th>ID</th>
	<th>Product Code</th>
	<th>Product Name</th>
	<th>Standard Cost</th>
	<th>List Price</th>
</tr>

<?php

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$id = $row["id"];
		$product_code = $row["product_code"];
		$product_name = $row["product_name"];
		$standard_cost = $row["standard_cost"];
		$list_price = $row["list_price"];
		;
		?>
		<tr>
			<td><?= $id ?></td>
			<td><?= $product_code ?></td>
			<td><?= $product_name ?></td>
			<td><?= $standard_cost ?></td>
			<td><?= $list_price ?></td>
			
			<td>
			<a href="view_dept.php?id=<?= $id ?>" class="btn btn-info" role="button">View</a>
			<a href="input_update_dept.php?id=<?= $id ?>" class="btn btn-info" role="button">Update</a>
			<a href="delete_dept.php?id=<?= $id ?>" class="btn btn-info" role="button" onClick=" Delete () ">Delete</a>
			</td>

		</tr>
	<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</table>
</div>
<!--Javascrip function -->
<script> 
 function Delete ()  {
	return confirm('Delete this department?')	 
 }
</script>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</body>
</html>
