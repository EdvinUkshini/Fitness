<?php
include 'includes/config.php';


  $msg = "";
  $responseType = "";
  

  if (isset($_POST['orderHoodie'])) {
	$hoodie = $_POST['hoodie'];
	$size = $_POST['size'];
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$spr = $_POST['spr'];
	$zipcode = $_POST['zipcode'];
	$country = $_POST['country'];
	$number = $_POST['number'];
	
	foreach($_REQUEST as $dataRequested => $value) {
	  if($value == "") {
		$msg = "Please fill all the required fields";
		$responseType = "danger";
	  }
	}
	
	$sql = "INSERT INTO orders (hoodie, size, fullname, address, city, spr, zpcode, country, number)
	VALUES ('$hoodie', '$size', '$fullname', '$address', '$city', '$spr', '$zipcode','$country','$number')";

	if ($conn->query($sql) === TRUE) {
	  $msg = "Message received";
	  $responseType = "success";
	} else {
	  $msg = "Something went wrong during the process.Please try again later!";
	  $responseType = "danger";
	}


  }
  ?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UndefinedXik</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="magiczoom.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- link to magiczoom.js file -->
        <script src="magiczoom.js" type="text/javascript"></script>


        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="/">
		<style>
         body {
        background-image: url("assets/img/web.jpg");
        background-repeat: no-repeat;
          background-size: cover;
          height: 100%;
          background-attachment: fixed;
          background-position: top;}
        </style>
    </head>
    <body >

<?php include 'nav.php';?>
				<?php if(!empty($msg)){ ?>
					<div class="alert alert-<?php echo $responseType;?> alert-dismissible">
					  <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <?php echo $msg;?>
					</div>
				<?php } ?>
    <section class="  mt-0" id="hoodies" style="margin-bottom:50px;">
        <div class="container ">
            <div id="carouselExampleIndicators" class="masthead-carousel carousel slide mt-2  d-flex justify-content-center align-items-center mx-auto" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/ff1.PNG" class=" w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/ff2.PNG" class=" w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/ff3.PNG" class=" w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </section>
  
    <section class="  mt-0" id="hoodies">
        <div class="container ">
            <!-- Merch Section Heading-->
            <h2 class=" text-center text-uppercase text-primary ">Omnist Hoodies</h2>
                 <br>
            
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center  ">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4  mb-5 ">
                            <div class="row justify-content-center align-items-center">
                                <img class="img-fluid" src="assets/img/hoodie1.gif" alt="..." />
                                <button type="button" class="btn btn-primary w-25 mt-5 text-dark" 
                                data-bs-toggle="modal" data-bs-target="#modalForm1">Order</button>
                            </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">   
                    <div class="row justify-content-center align-items-center">
                        <img class="img-fluid" src="assets/img/hoodie2.gif" alt="..." />
                        <button type="button" class="btn btn-primary w-25 mt-5 text-dark" 
                        data-bs-toggle="modal" data-bs-target="#modalForm2">Order</button>
                    </div>  
                </div>
            </div>
        </div>
    </section>



    <div class="modal fade " id="modalForm1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalLabel">Bersepolis Hoodie </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">

                        <div class="row justify-content-center align-items-center ">
                            <img class="img-fluid " style="width: 150px;"   src="assets/img/hoodie1.gif" alt="..." />
                            
                            <p class="text-center mx-auto text-primary" >
                                Price : 79.99 €
                               <br />
                             <span class="text-warning">PAY IN CASH AFTER ACCEPTING THE ORDER</span>  
                        </p>
                        </div>
						<input type="hidden" name="hoodie" value="Black" />
                        <div class="mb-3">
                            <label class="form-label" for="size">Size</label>
                            <select name="size" class="form-control" id="size">
                              
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                            </select>
                            </div>

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address Line 1</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address Line 1" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">State - Province - Region</label>
                            <input type="text" class="form-control" id="spr" name="spr" placeholder="State - Province - Region" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Zip / Postal Code</label>
                            <input type="number" class="form-control" id="zpcode" name="zipcode" placeholder="Zip - Postal Code" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="number" name="number" placeholder="Phone Number" />
                        </div>

                        
                        
                        <div class="modal-footer d-block justify-content-center align-items-center ">
                            <button type="submit" name="orderHoodie" class="btn btn-primary w-25  ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Merch 2-->
    <div class="modal fade " id="modalForm2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalLabel">Bersepolis Hoodie </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">

                        <div class="row justify-content-center align-items-center ">
                            <img class="img-fluid " style="width: 150px;" src="assets/img/hoodie2.gif" alt="..." />
                            <p class="text-center mx-auto  text-primary" >
                                Price : 79.99 €
                               <br />
                             <span class="text-warning">PAY IN CASH AFTER ACCEPTING THE ORDER</span>
                        </div>
						<input type="hidden" name="hoodie" value="Green" />
                        <div class="mb-3">
                            <label class="form-label" for="size">Size</label>
                            <select name="size" class="form-control" id="size">
                              
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                            </select>
                            </div>

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address Line 1</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address Line 1" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">State - Province - Region</label>
                            <input type="text" class="form-control" id="spr" name="spr" placeholder="State - Province - Region" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Zip / Postal Code</label>
                            <input type="number" class="form-control" id="zpcode" name="zipcode" placeholder="Zip - Postal Code" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="number" name="number" placeholder="Phone Number" />
                        </div>

                        
                        
                        <div class="modal-footer d-block justify-content-center align-items-center ">
                            <button type="submit" name="orderHoodie" class="btn btn-primary w-25 ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>









<!-- Background image -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        

    </body>
</html>