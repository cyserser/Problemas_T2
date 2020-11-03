<?php

include "registro.php";

if (isset($_GET["nombre"],$_GET["date"],$_GET["email"],$_GET["password"],$_GET["password2"])){



    $nombre = $_GET["nombre"];
    $date = $_GET["date"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $password2 = $_GET["password2"];



    if($password2==$password){
        echo "<h2> Los datos recibidos son los siguientes: </h2>";
        echo "Nombre: ".$nombre."<br>";
        echo "Fecha: ".$date."<br>";
        echo "Email: ".$email."<br>";

        $file = fopen("usuarios.txt","a");
        fputs($file,$nombre." ".$date." ".$email." ".md5($password)."\n"); //fputs o fwrite
        fclose($file);


        $nuevoUsuario = new registro($nombre,$date,$email,$password,$password2);

        $nuevoUsuario->getInfo();
    }
    else {
        echo "<h3> La contraseña es diferente</h3>";
    }
}

