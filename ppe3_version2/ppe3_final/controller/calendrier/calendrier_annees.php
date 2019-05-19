<?php
// Variable qui ajoutera l'attribut selected de la liste dÈroulante
$selected = '';

// Parcours du tableau
echo '<select name="annees">',"\n";
for($i=2016; $i<=2100; $i++)
{
    // L'annÈe est-elle l'annÈe courante ?
    if($i == $_SESSION['last_year'])
    {
        $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
    // Remise ‡ zÈro de $selected
    $selected='';
}
echo '</select>',"\n";
?>