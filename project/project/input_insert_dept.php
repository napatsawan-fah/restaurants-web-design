<!DOCTYPE html>
<html>
<head>
    <title> Insert Product </title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


<!-- bootstrap form -->
<div class="container">
<br> <br>
<h2>Add New Product</h2> <br> <br>
<form action="insert_dept.php" method="post">
  
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"> Product Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="product_code" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="product_name" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"> Standard Cost</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name= "standard_cost" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"> List Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name= " list_price" >
    </div>
  </div> <br> <br>
  <div class="container">
  <button type="submit" class="btn btn-primary">Submit</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input class="btn btn-primary" type="reset" value="Reset">
</div>
   
  </div>
</form>


</body>
</html>

