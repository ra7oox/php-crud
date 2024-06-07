<?php
$id=$_GET["id"];
$cnx=new PDO("mysql:host=localhost;dbname=test",'root',"");
$cr=$cnx->prepare("delete  from voting where idVot=?");
$cr->execute([$id]);

header("location:supprimer_from_database.php");


?>