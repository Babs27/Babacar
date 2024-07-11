<?php
    $prenom=$_POST["prenom"];
    $nom=$_POST["nom"];
    $email=$_POST["email"];
    $motpass=$_POST["password"];

    session_start();
    $_SESSION["prenom"]= $prenom;
    $_SESSION["nom"]= $nom;
    $_SESSION["password"]= $password;
    $_SESSION["email"]= $email;





?>