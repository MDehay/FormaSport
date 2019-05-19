<?php
function user_admin_refus_creneau($bdd, $fk_re, $fk_dr, $fk_ut)
{
    $user_admin_refus_creneau= $bdd-> prepare("DELETE FROM Disponible WHERE FK_RE=:RE AND FK_DR=:DR AND FK_UT=:UT");
    $user_admin_refus_creneau->bindValue(':RE', $fk_re);
    $user_admin_refus_creneau->bindValue(':DR', $fk_dr);
    $user_admin_refus_creneau->bindValue(':UT', $fk_ut);
    $user_admin_refus_creneau->execute();
}

function del_reunion($bdd, $id_reunion)
{
    $del_reunion= $bdd-> prepare("DELETE FROM Disponible WHERE FK_RE=:RE");
    $del_reunion->bindValue(':RE', $id_reunion);
    $del_reunion->execute();
}
?>