<?php

session_start() ;

// check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // store the user's name in the session
  $_SESSION["first_name"] = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
  $_SESSION["last_name"] = isset($_POST["last_name"]) ? $_POST["last_name"] : "";
}

// redirect if not logged in
if ( !isset( $_SESSION[ 'user_id' ] ) ) { 
  require ( 'login_tools.php' ) ; 
  load() ; 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>MK Time - Session-Cart</title>

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<style>
		.card{
			margin-top: 10px;
			margin-bottom: 20px;
		}
	</style>
	</head>
  <body>
  
  <a class="navbar-brand" href="products.php">
        <?php
        
        if (isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {
            echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
        } elseif (isset($_SESSION['first_name'])) {
            echo $_SESSION['first_name'];
        }
        ?>
  </a>
    
</body>

</html>
  