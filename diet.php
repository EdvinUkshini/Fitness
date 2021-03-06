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
    
    <link rel="stylesheet" href="style.css" />
    <title>Fitness Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
  <style>
    a{
	color: #cc6060;
	text-decoration: none;
}

a:hover{
	color: #519ac5fc;
}
.logo-wrapper{
	text-transform: uppercase;
	padding: 30px 0px;
}
.menu{
	padding-left: 0px;
	background: #519ac5fc;
}
.menu .container{
	padding-left: 0px;
}
.menu-items .active{
	background: #2483d6;
}
.menu .menu-items a{
	text-decoration: none;
	color: #fff;
	padding: 10px 30px;
	display: block;
}
.menu .menu-items a:hover{
	background: #2483d6;
}
.thumb{
	width: 100%;
}
.main-news{
	margin-top: 20px;
}
.main-news h3{
	line-height: 0.75;
}
.main-news h3 a{
	font-size: 17px;
	text-decoration: none;
	font-weight: 600;
}
.image{
	overflow: hidden;
}
.image-sm{
	max-height: 180px;
}
.image-sm img{
	height: 180px;
}
.image-xs{
	max-height: 140px;
}
.image-xxs{
	max-height: 100px;
}
.image img{
	object-fit: cover;
}
.font-large{
	font-size: 0.9em!important;
	font-weight: 600!important;
}
.section-title{
	position: relative;
	margin-bottom: 20px;
}
.section-title span{
	font-weight: 400;
	font-size: 17px;
	color: #519ac5fc;
}
.section-title span:after{
	content: '';
	position: absolute;
	background: #519ac5fc;
	width: 50px;
	height: 2px;
	left: 0;
	bottom: 0;
}
.bb-1{
	padding: 20px 0px;
	border-bottom: 1px solid #eee;
}
.section{
	border-bottom: 1px solid #eee;
	padding-bottom: 20px;
}
small{
	color: #999;
}
.summary{
	color: #777;
}
.trending .row{
	padding-bottom: 15px;
	margin-bottom: 15px;
	border-bottom: 1px solid #eee;
}
.sticky{
	position: fixed;
	top: 0;
	width: 100%;
}
.no-pad{
	padding-left: 0px!important;
}




  </style>


</head>
  <body>
 <?php include 'nav.php';?>

    <div class="container">
			<div class="logo-wrapper d-flex align-items-center">
				<h1>
					<a href="Diet.html">
						Guide & Plans
					</a>
				</h1>
			</div>
		</div>

	
			<div class="container main-news section">
				<div class="row">
				<?php
					include 'config/db.php';
					$imageSource = "img/diets/";
					$sql = "SELECT * FROM dietplans ORDER BY id DESC LIMIT 1";
					$result = $link->query($sql);

					if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
						$fullImageSource = $imageSource . $row['image'];
				?>
					<div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
						<img class="thumb mb-3" src="<?php echo $fullImageSource;?>">
						<h3>
							<a href="diet-details.php?id=<?php echo $row['id'];?>">
								<?php echo $row['name'];?>
							</a>
						</h3>
					</div>
					<?php } } ?>
					<div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
								
								<?php
									$sql = "SELECT * FROM dietplans ORDER BY id DESC LIMIT 1,2;";
									$result = $link->query($sql);
									while($row = $result->fetch_assoc()) {
										$fullImageSource = $imageSource . $row['image'];
								?>
								<div class="image image-sm mb-1">
									<img class="thumb" src="<?php echo $fullImageSource;?>">
								</div>
								<h3 class="mb-4">
									<a href="diet-details.php?id=<?php echo $row['id'];?>">
										<?php echo $row['name'];?>
									</a>
								</h3>
									<?php } ?>

							</div>

							<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
								<?php
									$sql = "SELECT * FROM dietplans ORDER BY id DESC LIMIT 3,2";
									$result = $link->query($sql);
									while($row = $result->fetch_assoc()) {
										$fullImageSource = $imageSource . $row['image'];
								?>
								<div class="image image-sm mb-1">
									<img class="thumb" src="<?php echo $fullImageSource;?>">
								</div>
								<h3 class="mb-4">
									<a href="diet-details.php?id=<?php echo $row['id'];?>">
										<?php echo $row['name'];?>
									</a>
								</h3>
									<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>

			

			<div class="container section">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="mb-4 mt-4">
							<div class="section-title">
								<span>Follow this guide step by step to find what works for you </span>
							</div>
							<div class="row mb-3 bb-1 pt-0">
								<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
									<img class="thumb" src="/img/cash.jpg ">
								</div>
								<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
									<h5>
										<a >
											Step 1: What's my budget ?
										</a>
									</h5>
									
									<p class="summary pt-3">First you need to find out how much are you willing to spend on a new diet,which you may be able or not to support financially.</p>
								</div>
							</div>
							<div class="row mb-3 bb-1 pt-0">
								<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
									<img class="thumb" src="/img/health-topics-2.jpg"">
								</div>
								<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
									<h5>
										<a >
										Step 2:	Do I have health issues ?
										</a>
									</h5>
									
									<p class="summary pt-3">Sometimes having issues with your health may prevent you to follow a diet plan that doesnt compromise your other problems.Find out what those are and work to fix them.</p>
								</div>
							</div>
							<div class="row mb-3 bb-1 pt-0">
								<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
									<img class="thumb" src="/img/Dietician.png">
								</div>
								<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
									<h5>
										<a >
											Step 3: Contact a proffesional !
										</a>
									</h5>
						
									<p class="summary pt-3">Contact a dietitian and tell them about your goals.Work with them to start a new diet according to your needs.</p>
								</div>
							</div>
							<div class="row mb-3 bb-1 pt-0">
								<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
									<img class="thumb" src="/img/blood.jpg">
								</div>
								<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
									<h5>
										<a >
											Step 4: Do the blood work !
										</a>
									</h5>
								
									<p class="summary pt-3">Find out what your body needs by doing the blood work.It will help your dietitian find a reasonable plan for your body type.</p>
								</div>
							</div>
							<div class="row mb-3 bb-1 pt-0">
								<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
									<img class="thumb" src="/img/plan.jpg">
								</div>
								<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
									<h5>
										<a>
											Step 5: Get your diet plan and follow it strictly !
										</a>
									</h5>
									
									<p class="summary pt-3"> After doing all the above steps now you should be following the instructions and taking in all the goodness it has to offer.</p>
								</div>
							</div>

							
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="trending mt-4">
							<div class="section-title">
								<span>Plans</span>
							</div>
							<?php
									$sql = "SELECT * FROM dietplans ORDER BY id DESC";
									$result = $link->query($sql);
									while($row = $result->fetch_assoc()) {
										$fullImageSource = $imageSource . $row['image'];
							?>
							<div class="row">
								<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
									<img class="thumb" src="<?php echo $fullImageSource;?>">
								</div>
								<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
									<a href="diet-details.php?id=<?php echo $row['id'];?>">
										<?php echo $row['name'];?>
									</a>
								</div>
							</div>
						    <?php } ?>

						</div>
					</div>
				</div>
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