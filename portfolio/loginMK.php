<?php 
  include ( 'includes/navRegMK.php' ) ;

  if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

  // display error messages where needed
  if ( isset( $errors ) && !empty( $errors ) )
{
   echo '<br><p id="err_msg" class="m-5">Oops! There was a problem:<br>' ;
   foreach ( $errors as $msg ) { 
     echo " - $msg<br>" ; 
}
   echo 'Please try again or <a href="registrationMK.php">Register!</a></p>' ;
}
  include 'includes/footerMK.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Time - Login Form</title>
    <link rel="stylesheet" type="text/css" href="stylesMK.css">
</head>
  <body>
<div class="container mx-auto d-block p-3">
  <div class="row text-dark">
    <div class="col-6 p-2 mt-5">
      <div class="box box-login border border-dark">
      <form action="login_action.php" method="post">
        <div class="m-5">
          <label for="emailInput" class="form-label">Email address:</label>
          <input type="email" class="form-control" id="emailInput" name="email" placeholder="name@example.com">
        </div>
        <div class="m-5">
          <label for="passwordInput" class="form-label">Password:</label>
          <input type="password" class="form-control" id="passwordInput" name="pass">
          <a href="#" class="text-dark float-end">I forgot my password!</a>	
        </div>
        <div class="form-check form-switch m-5" style=>
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="flexSwitchCheckChecked">Remember me!</label>
        </div>  
      <div class="text-center m-4">
	      
	      <input type="submit" class="btn btn-dark custom-btn" value="Log in"></input>      
      </div>
      </form>
      </div>
      
    </div>
   <div class="col-6 p-3 mt-5">
      <img src="img/login-img.jpg" class="img-fluid login-img" alt="Time flies">
   </div>
  </div>
</div>
</body>
</html>