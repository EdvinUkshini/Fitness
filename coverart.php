<?php
include 'includes/config.php';
?>
<!DOCTYPE html>
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
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="/">
		<style>
         body {
        background-image: url("/assets/img/web.jpg");
        background-repeat: no-repeat;
          background-size: cover;
          height: 100%;
          background-attachment: fixed;
          background-position: top;}
        </style>

<script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>

<script type="text/javascript">

function zoom(el){
var options1 = {
	zoomPosition: 'original',
    offset: {vertical: 0, horizontal: 10}
};

new ImageZoom(el, options1);
}

</script>



    </head>
    <body >

<?php include 'nav.php';?>

        <section class="page-section portfolio mt-5 " id="coverart">
            <div class="container">
                
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-start">
				
					<?php
						$path = "assets/art/";
						$sql = "SELECT * FROM coverArt ORDER BY created_at DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
							  $fullPath = ''.$path.'/'.$row['filename'].'';
					?>
                   
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" >             
							<div id="<?php echo $row['id'];?>" onmouseover="zoom(this)">
								<img src="<?php echo $fullPath;?>"  alt="" class="img-fluid" />
							</div>
						</div>
					</div>
                    <?php
						  }
						} else {
						  echo "we're not feeling creative yet";
						}

						$conn->close();
					?>
                </div>
					




                </div>



            </div>
        </section>

        


        
<!-- Background image -->
<!-- transform: scale(2.08);
transition: .3s ; 



        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        

    </body>
</html>