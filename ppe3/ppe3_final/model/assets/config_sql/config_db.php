<?php


//Paramettre pour la connexion a la base
$Databases = "mysql:host=localhost;dbname=FormaSport;charset=utf8";
$User = "FormaSportAdmin";
$Password = "FormaSportPassword";

try {

//Si reussi se connecte
    $bdd = new PDO($Databases,$User,$Password, [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
    ]);

}

catch(Exception $e) {

    //Sinon renvoie une erreur
    die('Erreur : '.$e->getMessage());

}

$g_smtp_username="julien.brassart@ltpdampierre.fr";
$g_smtp_password="nilaut/18";
$g_smtp_host="smtp.gmail.com";
$g_smtp_port="587";

?>

