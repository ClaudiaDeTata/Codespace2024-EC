<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);
    // htmlentities() convert to html chars

    if (empty($firstname)) {
        exit();
        header("Location: form.php"); 
    }

    echo "These are the data that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    header("Location: form.php");  
}
else {
    header("Location: form.php");  
}