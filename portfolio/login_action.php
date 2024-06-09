<?php 

// check form is submitted
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  
  require ( 'connectDB.php' ) ;

  // get connection, load and validate functions
  require ( 'login_tools.php' ) ;

  // check login
  list ( $check, $data ) = validate ( $link, $_POST[ 'email' ], $_POST[ 'pass' ] ) ;

  // on success set session data and display logged in page
  if ( $check )  
  {
    // access session
    session_start();
    $_SESSION[ 'user_id' ] = $data[ 'user_id' ] ;
    $_SESSION[ 'first_name' ] = $data[ 'first_name' ] ;
    $_SESSION[ 'last_name' ] = $data[ 'last_name' ] ;
    load ( 'products.php' ) ;
  }
  // or on failure set errors
  else { $errors = $data; } 

  mysqli_close( $link ) ; 
}

// continue to display login page on failure
  include ( 'loginMK.php' ) ;

  include 'includes/footerMK.php';
?>
