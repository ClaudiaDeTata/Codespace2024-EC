<!DOCTYPE html>
<html>
<head>
    <title>MK Time - Login Tools</title>
    
</head>
<body>

<?php 

// function to load specified or default URL
function load( $page = 'products.php' )
{
  // begin URL with protocol, domain, and current directory
  $url = 'http://' . $_SERVER[ 'HTTP_HOST' ] . dirname( $_SERVER[ 'PHP_SELF' ] ) ;

  // remove trailing slashes then append page name to URL
  $url = rtrim( $url, '/\\' ) ;
  $url .= '/' . $page ;

  // execute redirect then quit 
  header( "Location: $url" ) ; 
  exit() ;
}

// function to check email address and password 
function validate( $link, $e = '', $p = '')
{
  // initialize errors array
  $errors = array() ; 

  // check email field
  if ( empty( $e ) ) 
  { $errors[] = 'Enter your email address.' ; } 
  else  { $e = mysqli_real_escape_string( $link, trim( $e ) ) ; }

  // check password field
  if ( empty( $p ) ) 
  { $errors[] = 'Enter your password.' ; } 
  else { $p = mysqli_real_escape_string( $link, trim( $p ) ) ; }

  // on success retrieve user_id, first_name, and last_name from users table
  if ( empty( $errors ) ) 
  {
    $q = "SELECT user_id, first_name, last_name FROM users WHERE email='$e' AND pass='$p'" ;  
    $r = mysqli_query ( $link, $q ) ;
    if ( @mysqli_num_rows( $r ) == 1 ) 
    {
      $row = mysqli_fetch_array ( $r, MYSQLI_ASSOC ) ;
      return array( true, $row ) ; 
    }
    // or on failure set error message
    else { $errors[] = 'Email address and password not found.';
      echo '<div>Email address and password not found.</div>';
  }
  // on failure retrieve error message
  return array( false, $errors ) ; 
 }
}
?>

</body>
</html>