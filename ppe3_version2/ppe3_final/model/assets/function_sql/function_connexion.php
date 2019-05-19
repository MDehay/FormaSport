<?php
function verification_connextion($bdd , $login, $password)
{
    $connexion = $bdd->prepare("SELECT UT_MAIL, UT_MDP FROM Utilisateur WHERE UT_MAIL = :mail AND UT_MDP = :mdp");
    $connexion->bindValue(':mail', $login);
    $connexion->bindValue(':mdp', $password);
    $connexion->execute();
    return $connexion;
}

?>