<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />
    <title>Fitness Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<style>
  body {
    margin: 0;
    line-height: 1.5385;
    text-align: left;
    
}
</style>
  </head>
  <body>
<?php include 'nav.php';?>

<section class="container">
  <div class="container d-flex align-items-center  justify-content-center " >
    <div 
      id="carouselExampleCaptions" 
      class="carousel slide"
      data-bs-interval="5000"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-current="true"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-current="true"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img 
            src="img/c1.jpg"
            class="d-block w-100"
            alt="Sailboat 1"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some placeholder text to describe the image.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img 
            src="img/c2.jpg"
            class="d-block w-100"
            alt="Sailboat 2"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some placeholder text to describe the image.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img 
            src="img/c3.jpg"
            class="d-block w-100"
            alt="Sailboat 3"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some placeholder text to describe the image.</p>
          </div>
        </div>
      </div>
      <button 
        class="carousel-control-prev" 
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button 
        class="carousel-control-next" 
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>

</section>
      

<div class="container d-flex justify-content-center mt-50 mb-50">
  <div class="row">
  
  <?php
    $imageSource = "img/products/";
	$sql = "SELECT * FROM products ORDER BY id DESC";
	$result = $link->query($sql);
	while($row = $result->fetch_assoc()){
		$fullImageSource = $imageSource . $row['image'];
  ?>
      <div class="col-md-4 mt-2">
          <div class="card">
              <div class="card-body">
                  <div class="card-img-actions"> <img src="<?php echo $fullImageSource;?>" class="card-img img-fluid" width="96" height="350" alt=""> </div>
              </div>
              <div class="card-body bg-light text-center">
                  <div class="mb-2">
                      <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2 text-decoration-none" data-abc="true"><?php echo $row['name'];?></a> </h6> <a  class="text-muted text-decoration-none" data-abc="true"><?php echo $row['type'];?></a>
                  </div>
                  <h3 class="mb-0 font-weight-semibold">$<?php echo $row['price'];?></h3>
                  <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                   <a href="productdetail.php?id=<?php echo $row['id'];?>" class="btn bg-cart mt-5" ><i class="fa fa-cart-plus mr-2"></i>Details</a>
              </div>
          </div>
      </div>
	<?php
	}
	?>
	
  </div>
</div>






























    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Copyright &copy; 2021 UBT - Web Engineering</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>
<!-- Modal per krijimin e llogarise -->
<div class="modal fade" id="enroll" tabindex="-1" 
aria-labelledby="enrollLabel"
data-bs-backdrop="static"
aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title " id="enrollLabel">Create an account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="inputUsername">
            
          </div>
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword1">
          </div>
          <div class="form-check ">
            <input class="form-check-input" type="radio" name="flexRadioMale" id="flexRadioMale1">
            <label class="form-check-label" for="flexRadioMale1">
              Male
            </label>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="flexRadioFemale" id="flexRadioFemale2" checked>
            <label class="form-check-label" for="flexRadioFemale2">
              Female
            </label>
          </div>
          
          
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

<?php include 'loginModal.php';?>

<script
src="js/bootstrap.js"

></script>
  </body>
</html>