<?php
// Include db file
require_once "config/db.php";
 
// Define variables and initialize with empty values
$fullName = $email = $message = "";
$inputErr = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if Full Name is empty
    if(empty(trim($_POST["fullName"]))){
        $inputErr = "Please enter your full name.";
    } else{
        $fullName = trim($_POST["fullName"]);
    }
	// Check if Email is empty
    if(empty(trim($_POST["email"]))){
        $inputErr = "Please enter your email.";
    } else{
        $email = trim($_POST["email"]);
    }
	// Check if Message is empty
    if(empty(trim($_POST["message"]))){
        $inputErr = "Please enter your message.";
    } else{
        $message = trim($_POST["message"]);
    }

    
    // Validate credentials
    if(empty($inputErr)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO contact (fullName,email,message) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss",$param_fullName,$param_email, $param_message);
            
            // Set parameters
            $param_fullName = $fullName;
			$param_email = $email;
			$param_message = $message;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
            } else{
                $inputErr = "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    
    // Close connection
    mysqli_close($link);
}
}
?>
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
  header {
    margin-top: 40px;

  }
</style>
  </head>
  <body>
   <?php include 'nav.php';?>
    
      <header class="masthead text-center text-black ">
        <div class="masthead-content ">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">About Us</h1>
                <h2 class="masthead-subheading mb-0">Our services and excellence</h2>
                
            </div>
        </div>
        
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="/img/Dietician.png" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">For those about to rock...</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="/img/dash.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">We salute you!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="/img/plan.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Let there be rock!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
      <div class="row mx-0 justify-content-center mt-5">
        <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
         <form 
			action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
            method="POST"
			class="w-100 rounded-1 p-4 border bg-white"
          >
            <label class="d-block mb-4">
              <span class="form-label d-block">Your name</span>
              <input
                name="fullName"
                type="text"
                class="form-control"
                placeholder="Joe Bloggs"
              />
            </label>
    
            <label class="d-block mb-4">
              <span class="form-label d-block">Email address</span>
              <input
                name="email"
                type="email"
                class="form-control"
                placeholder="joe.bloggs@example.com"
                required
              />
            </label>
    
            <label class="d-block mb-4">
              <span class="form-label d-block">Message</span>
              <textarea
                name="message"
                class="form-control"
                rows="3"
                placeholder="Tell us what you're thinking about..."
                required
              ></textarea>
            </label>
    
            <div class="mb-3">
              <button type="submit" class="btn btn-primary px-3 rounded-3">
                Contact Us
              </button>
            </div>
    
            
          </form>
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