<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="style.css" />
    <title>Fitness Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">


<style>
    a{
	color: #cc6060;
	text-decoration: none;
}

a:hover{
	color: #519ac5fc;
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

.section{
	border-bottom: 1px solid #eee;
	padding-bottom: 20px;
}
small{
	color: #999;
}

</style>
  </head>
  <body>
   <?php include 'nav.php';?>

      <div class="container main-news">
        <div class="row">
		 <div class="col-8">
		   <?php 
			if(isset($_GET['id'])){ ?>

			<?php
				$id = (!empty($_GET['id'])) ? $_GET['id'] : "";
				include 'config/db.php';
				$imageSource = "img/diets/";
				$sql = "SELECT * FROM dietplans Where id='".$id."'";
				$result = $link->query($sql);
				  while($row = $result->fetch_assoc()) {
					$fullImageSource = $imageSource . $row['image'];
			?>
            
                <h1><?php echo $row['name'];?></h1>
                <small><?php echo $row['created_at'];?></small>
                <p class="mt-4 summary"><?php echo $row['text'];?></p>
                <img src="<?php echo $fullImageSource;?>" class="mt-3 thumb">
				<?php
				  }
				  }else{ echo 'Something went wrong'; }
				  ?>
<hr>
                <div class="container section mt-4 no-pad">
        <div class="section-title">
            <span>Recommended</span>
        </div>
        <div class="row">
		<?php
		$sql = "SELECT * FROM dietplans ORDER BY id DESC LIMIT 4";
		$result = $link->query($sql);
		while($row = $result->fetch_assoc()){
			$fullImageSource = $imageSource . $row['image'];
		?>
            <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3">
                <div class="mb-2 image image-xs">
                    <img class="thumb" src="<?php echo $fullImageSource;?>">
                </div>
                <a href="diet-details.php?id=<?php echo $row['id'];?>">
                    <?php echo $row['name'];?>
                </a>
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

          
          
       


<?php include 'loginModal.php';?>

    <script src="js/bootstrap.js"></script>
  </body>
</html>