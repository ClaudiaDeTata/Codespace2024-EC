<?php 

// connect/Link on localhost
$link = mysqli_connect('localhost','root','','mktime'); 
  
if (!$link) { 
// otherwise error
  die('Could not connect to MySQL: ' . mysqli_connect_error()); 
} else {
   // echo 'Connected to the database successfully!';  
}
?> 