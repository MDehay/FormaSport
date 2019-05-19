<?php


	// la je fais appelle au fichier cosql qui content les para pour se connecter a la base de donner
	include_once("../../model/assets/config_sql/config_db.php");
	include_once ("../../model/assets/session/function_session.php");
	include_once ("../../model/assets/function_sql/function_connexion.php");

	session_start();

	$login=identifiant()[0];
	$password=identifiant()[1];

    //Verification si les identifiants existes dans la base de données
    $id_connexion=verification_connextion($bdd,$login,$password);


    //Ici je recupere le nombre de ligne de la requete => normalement egale a 1
    $num_rows = $id_connexion->rowCount();

     while ($Donnees = $id_connexion->fetch()) {

      }

      //Si le nombre de requette est egale a 1
      if ($num_rows == 1) {
          header('location:../../view/page_menu/Acceuil.php');


      } else {
         //Sinon je retourne a la page principal
          header("location:../index.php?message=login_password_error");


      }
?>
