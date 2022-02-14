<?php

 
// Include db file
require_once "config/db.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$inputErr = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $inputErr = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $inputErr = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($inputErr)){
        // Prepare a select statement
        $sql = "SELECT id, username, email, password, role FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if user exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $email, $hashed_password, $role);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){      

							session_start();
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
							$_SESSION["email"] = $email;
                            $_SESSION["username"] = $username;
							$_SESSION["role"] = $role;
							
                            
                            // Redirect user to main page
                            header("Refresh: 2; url=index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $inputErr = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $inputErr = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<div class="modal fade" id="login" tabindex="-1" 
aria-labelledby="loginLabel"
data-bs-backdrop="static"
aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title " id="enrollLabel"><?php echo (!empty($inputErr)) ? $inputErr : 'Login'; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="inputEmail" >
          </div>
          <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword1">
          </div>
		  <div class="modal-footer justify-content-center">
			<button type="submit" id="submit" class="btn btn-primary">Login</button>
		  </div>
        </form>
      </div>
    </div>
  </div>
</div>
