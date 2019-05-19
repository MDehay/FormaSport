<?php

    $page =explode("/",$_SERVER['PHP_SELF']);
    $nb_dossier=COUNT($page);

    if($nb_dossier=="6")
    {
        $pages=$page[5];
    }

    else if ($nb_dossier=="5") {
        $pages=$page[4];
    }
    else if ($nb_dossier=="3")
    {
        $pages=$page[2];
    }

    if($pages == "description_reunion.php")
    {
        include_once '../../model/assets/config_sql/config_db.php';
        include_once '../../model/assets/function_sql/function_insert_reunion.php';
        include_once '../../model/assets/session/function_session.php';

        $id_dis=modif_reunion();

        //on fait appel a la fonction sql qui recuperer tous les lieux possible pour la reunion
        $arrListe_lieux=choix_lieux($bdd);

        if(!empty($id_dis))
        {
            include_once '../../model/assets/function_sql/function_modif_reunion.php';


            $objet_reunion=affichage_object_reunion($bdd, $id_dis);

            $description_reunion=affichage_description_reunion($bdd, $id_dis);

            $lieux_reunion=affichage_lieux_reunion($bdd, $id_dis);

             //on fait appel a la fonction sql qui recuperer tous les lieux possible pour la reunion
            $lieu_existant=lieux_restant($bdd, $lieux_reunion);

       }

    }
     if($pages == "date_reunion.php")
     {

         include_once '../../model/assets/session/function_session.php';

         $id_dis=modification_reunion();

         // on fait appel a une fonction qui recupere tous les donnees de description de la reunion
         description_reunion();


         if(!empty($id_dis))
         {

             modif_description_reunion();

             include_once '../../model/assets/config_sql/config_db.php';
             include_once '../../model/assets/function_sql/function_modif_reunion.php';


             $date_reunion=affichage_date_reunion($bdd, $id_dis);

             $date_validiter=affichage_date_validiter_reunion($bdd,$id_dis);

             $creneau_debut=affichage_creneau_debut_reunion($bdd, $id_dis);

             $creneau_fin=affichage_creneau_fin_reunion($bdd, $id_dis);

         }

     }

     if($pages == "personne_inviter_reunion.php")
     {
         include_once '../../model/assets/session/function_session.php';
         include_once '../../controller/reunion/creation_reunion/valeur_session_date_reunion.php';
         include_once '../../model/assets/config_sql/config_db.php';
         include_once '../../model/assets/function_sql/function_insert_reunion.php';

         $id_dis=modification_reunion();

         //on fait appel a une fonction qui afficher tous les utilisateur posible dans une liste deroulantes
         $arrListe_personne=choix_personne($bdd);

         if(!empty($id_dis))
         {
             modif_date_reunion();

             include_once '../../model/assets/function_sql/function_modif_reunion.php';
             include_once '../../model/assets/function_sql/function_insert_reunion.php';


             $verif_personne_reunion=affichage_verif_personne_reunion($bdd, $id_dis);

             $personne_reunion=affichage_personne_reunion($bdd, $id_dis);

             $redirection="../../controller/reunion/modification_reunion/update_reunion.php";


         }
         else
         {
             $redirection="../../controller/reunion/creation_reunion/insert_reunion.php";
         }


     }

?>