<?php
if(isset($_POST['username'])){
    $_SESSION['last_user']=$_POST['username'];
}else{
    $_SESSION['last_user']='';
}
if(isset($_POST['annees'])){
    $_SESSION['last_year']=$_POST['annees'];
}else{
    $_SESSION['last_year']=date('Y');
}
if(isset($_POST['MoisChoisi'])){
    $_SESSION['last_month']=$_POST['MoisChoisi'];
}else{
    $mois=date('n');
    $_SESSION['last_month']=intval($mois);
}
?>


