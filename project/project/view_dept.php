<!DOCTYPE html>
<html>
<head>
	<title> View Product </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
// Include database connection file
require_once "dbconnect.php";

$id= $_GET['id'];

$sql="SELECT id, product_code, product_name, standard_cost, list_price FROM products WHERE id =$id ";
$result = mysqli_query($conn,$sql);

?>

<br> <br>

<div class="container">
<h2> View Data</h2> <br>
 <!-- Table Bootstarp-->
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
			
			

		</tr>
	<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</div>
</table>
</body>
</html>