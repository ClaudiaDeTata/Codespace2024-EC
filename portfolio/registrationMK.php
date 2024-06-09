<?php 

include ( 'includes/navRegMK.php' ) ;
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  
  require ('connectDB.php'); 
  
  // Data Validation
  // initialize error array
  $errors = array();

  // check for a first name
  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  { $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

  // check for last name
  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name.' ; }
  else
  { $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }

  // check for email address
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

  // check for password and matching input password
  if ( !empty($_POST[ 'pass1' ] ) )
  {
    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass1' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password.' ; }
  
  // check if email address is already registered
  if ( empty( $errors ) )
  {
    $q = "SELECT user_id FROM users WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 
      'Email address already registered. <a class="alert-link" href="loginMK.php">Sign In Now</a>' ;
  }
  
  // on success register user inserting into users table
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO users (first_name, last_name, email, pass, reg_date) 
	VALUES ('$fn', '$ln', '$e', '$p', NOW() )";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '<div class="container" style="margin-top: 50px;">
			<div class="alert alert-secondary" role="alert">
				<h4 class="alert-heading"><i class="fa-solid fa-champagne-glasses fa-lg"></i>Registered!</h4>
				  <p>You are now registered.</p>
				    <a class="alert-link" href="loginMK.php">Login</a>'; }
        else {
          die('Error: ' . mysqli_error($link)); 
        }
        
    mysqli_close($link); 

    exit();
  }
  // or report errors
  else 
  {
    echo '<div class="container" style="margin-top: 50px;">
			<div class="alert alert-secondary" role="alert">	
			  <h4 class="alert-heading" id="err_msg">
          <i class="fa-solid fa-triangle-exclamation fa-lg"></i>The following error(s) occurred:</h4>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo '<p>or please try again.</p></div>';
   
    mysqli_close( $link );
  }  
}
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Time - Registration Form</title>
      <link rel="stylesheet" type="text/css" href="stylesMK.css">
</head>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mt-5">
          <img src="img/reg-img.jpg" class="img-fluid" alt="Time flies">
        </div>
      
    <!-- Registration form -->
    <div class="col-lg-6 mt-5">
      <div class="box box-reg border border-dark">
        <div class="ms-5 me-5 mt-4">
          <p><strong>Registration Form:</strong></p>
          <form action="registrationMK.php" method="post">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" 
              value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>">	
        </div> 

        <div class="ms-5 me-5 mt-3">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" 
          value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">	
        </div> 

        <div class="ms-5 me-5 mt-3">
          <label for="emailInput" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" 
          value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
        </div>

        <div class="ms-5 me-5 mt-3">
          <label for="pass1" class="form-label">Create a New Password</label>
          <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Create New Password" 
          value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>">	
        </div>

        <div class="ms-5 me-5 mt-3 mb-4">
          <label for="pass2" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirm Password" 
          value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>">	
        </div>
      <div class="text-center mb-5">
	      <br> 
	      <input type="submit" class="btn btn-dark custom-btn" value="Register Now!"></input>				  
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
