<?php
$m = array("1" => "Janvier", "2" => "FÈvrier", "3" => "Mars", "4" => "Avril");
$m += array("5" => "Mai", "6" => "Juin", "7" => "Juillet", "8" => "Août");
$m += array("9" => "Septembre", "10" => "Octobre",  "11" => "Novembre", "12" => "DÈcembre");

$selected = '';

// Parcours du tableau
for($i=1; $i<=12; $i++)
{
    if($i == $_SESSION['last_month'])
    {
        $selected = ' selected="selected"';
    }
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $m[$i],'</option>',"\n";
    $selected = '';
}

?>