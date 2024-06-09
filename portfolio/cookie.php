<?php

session_start();

// set the cookie duration (1 hour)
$cookie_duration = time() + 3600;

// check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the user's name in a cookie
    setcookie("user_name", $_POST["user_name"], $cookie_duration, "/", "", false, true); 

    // Store the user's name in the session for consistency
    $_SESSION["user_name"] = $_POST["user_name"];
}

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    require('login_tools.php');
    load(); // Assuming 'load' is a function that redirects to the login page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MK Time - Cookie</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .card {
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<a class="navbar-brand" href="products.php">
    <?php
    // Check if $_SESSION['user_name'] or $_COOKIE['user_name'] are set before echoing
    if (isset($_SESSION['user_name'])) {
        echo htmlspecialchars($_SESSION['user_name']);
    } elseif (isset($_COOKIE['user_name'])) {
        echo htmlspecialchars($_COOKIE['user_name']);
    }
    ?>
</a>

</body>
</html>
