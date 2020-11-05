<?php

session_start();

$expiryTime = time()+60*60*24;

$name = "Email";

$email = $_GET["email"];

setcookie($name,$email,$expiryTime);

if(!isset($_COOKIE['Email'])){
    echo "Ya has estado por aqui amigo";

} else {
    echo "El email obtenida del cookie es: ";
    echo $_COOKIE['Email'];
}

if(isset($_SESSION['Email'])){

    echo "\nUser is logged in";

} else {

    echo "\nNo one is logged in";
}

