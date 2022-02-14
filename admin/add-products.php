<?php
include 'auth.php';
include("../config/db.php");


if(isset($_POST['addProduct'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "../img/products/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $err = "";
  $success = "";

  $productName = $_POST['productName'];
  $type = $_POST['type'];
  $price = $_POST['price'];
  $text = $_POST['text'];

  if(empty($productName) || empty($text) || empty($type) || empty($price)){
    $err = "Fill out the form";
  }

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) && empty($err)){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
      $insert = "INSERT into products(name,type,text,price,image) 
      values('$productName','$type','$text','$price','$name')";
      if(mysqli_query($link, $insert)){
        $success = "Product is inserted successfully";
      }
      else{
        echo 'Error: '.mysqli_error($link);
      }
     }

  }
 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    
    <link rel="stylesheet" href="../style.css" />
    <title>Fitness Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
          <a href="/admin/" class="navbar-brand">FitBlog </a>
  
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
			  <li class="nav-item">
                <a href="/admin/" class="nav-link">Add Diet Plan</a>
              </li>
              <li class="nav-item">
                <a href="diet-plans.php" class="nav-link">Diet Plans</a>
              </li>
              <li class="nav-item">
                <a href="add-products.php" class="nav-link">Add Product</a>
              </li>
              <li class="nav-item">
                <a href="products.php" class="nav-link">Products </a>
              </li>
			  <li class="nav-item">
                <a href="contacts.php" class="nav-link">Contacts </a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
		<div class="container">
		<br /><br />
		<form class="row g-3" method="post" action="" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="productName" class="form-label">Product name</label>
    <input type="text" name="productName" class="form-control" id="productName">
  </div>
  <div class="col-md-6">
    <label for="type" class="form-label">Product type</label>
    <input type="text" name="type" class="form-control" id="type">
  </div>
  <div class="col-12">
    <label for="text" class="form-label">Description</label>
    <textarea rows="4" name="text" class="form-control" id="text" placeholder="text"></textarea>
  </div>

  <div class="col-md-6">
      <label for="inputFile" class="form-label">Image</label>
	  <input type='file' name='file' id="inputFile" class="form-control" />
  </div>
  <div class="col-md-6">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" id="price" step=".01">
  </div>
  <div class="col-12">
    <button type="submit" name='addProduct' class="btn btn-primary">Add Product</button>
  </div>
</form>
		
		</div>
      <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center fixed-bottom">
        <div class="container">
          <p class="lead">Copyright &copy; 2021 UBT - Web Engineering</p>
  
          <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
          </a>
        </div>
      </footer>
    <script src="../script.js" ></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>