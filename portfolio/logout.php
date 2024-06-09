<?php
// start the session if it has not been started yet
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// unset all of the session variables
$_SESSION = array();

// delete the session cookie, in case the session needs to be closed
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 3600,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// destroy the session
session_destroy();

// redirect to login page
header('Location: loginMK.php');
exit;
?>

