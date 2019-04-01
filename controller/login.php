<?php


	// la je fais appelle au fichier cosql qui content les para pour se connecter a la base de donner
	include_once("config_db.php");

	session_start();


	//On recupere les valeurs du post
	$login = $_SESSION['Email']=$_POST['Email'];

	$password = $_SESSION['Mdp']=$_POST['Mdp'];

	//$login = "User1@user1.com";
	//$password = "User1";


    //Ici je prepare ma requete Select, avec comme para le login et le password recuperer du poste
    $req = $bdd->prepare("SELECT FK_TC FROM Utilisateur WHERE UT_MAIL = :mail AND UT_MDP = :mdp");
    $req->execute(array(":mail" => $login, ":mdp" => $password));


    //Ici je recupere le nombre de ligne de la requete => normalement egale a 1
    $num_rows = $req->rowCount();

     while ($Donnees = $req->fetch()) {

      //Ici je vais recuperer le grade de l'utilisateur pour pouvoir
      $_SESSION['TypeGrade'] = $Donnees['FK_TC'];

      }

      //Si le nombre de requette est egale a 1
      if ($num_rows == 1) {
          header('location:Acceuil.php');


      } else {
         //Sinon je retourne a la page principal
          header("location:../index.php?message=login_password_error");


      }
 
?>
