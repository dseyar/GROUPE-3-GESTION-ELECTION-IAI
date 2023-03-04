<?php
if(isset($_POST['email'])){
try{
$bdd = new PDO('mysql:host=localhost;dbname=voting_db','root','');
}
catch(Exception $e){
    die('erreur' .$e->getmessages());
}
$requete=$bdd->prepare('INSERT INTO Newsletter(email) VALUES(?)');
$requete->execute(array($_POST['email']));}
header("location:index.php");
?>
