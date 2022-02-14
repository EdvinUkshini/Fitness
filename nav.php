<?php
// Include db file
require_once "config/db.php";
?>
	  	      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="/" class="navbar-brand">FitBlog </a>

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
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="diet.php" class="nav-link">Diet</a>
            </li>
            <li class="nav-item">
              <a href="healthyhabits.php" class="nav-link">H&H</a>
            </li>
            <li class="nav-item">
              <a href="products.php" class="nav-link">Products</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About Us</a>
            </li>
			<?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){ ?>
            <li class="nav-item">
              <button
              class="btn btn-warning btn-sm"
              data-bs-toggle="modal"
              data-bs-target="#login"
            >
              Log In
            </button>
            </li>
			<?php }else{ ?>
			<li class="nav-item">
              <a
              class="btn btn-warning btn-sm"
			  href="logout.php"
            >
              Log Out
            </a>
            </li>
			<?php } ?>
          </ul>
        </div>
      </div>
    </nav>