<?php

session_start();

// check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // store the user's name in the session
  $_SESSION["first_name"] = $_POST["first_name"];
}
?>

