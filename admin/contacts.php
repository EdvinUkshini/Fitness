<?php
include 'auth.php';
include("../config/db.php");

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
          <table class="table">
            <tr>
              <th>ID</th>
              <th>Full Name</th>
			  <th>Email</th>
			  <th>Message</th>
			  <th>Date received</th>
            </tr>
            <?php
                $sql = "SELECT * FROM contact ORDER BY id DESC";
                $result = $link->query($sql);
            
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['fullName'];?></td>
			  <td><?php echo $row['email'];?></td>
			  <td><?php echo $row['message'];?></td>
              <td><?php echo $row['date_sent'];?></td>
            </tr>
            <?php
                  }
                }else{
                  echo '<p>No results</p>';
                }
            ?>
          </table>
		
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