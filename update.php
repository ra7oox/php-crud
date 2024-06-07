<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id=$_GET["id"];
    $cnx=new PDO("mysql:host=localhost;dbname=test",'root',"");
    $cr=$cnx->prepare("select * from voting where idVot=?");
    $cr->execute([$id]);
    $res=$cr->fetchAll();


?>
    <form  method="post" >
        <?php foreach($res as $row):  ?>

        <input type="text" name="user" placeholder="user" value="<?php echo $row['userVot'] ?>">
        <input type="text" name="pswd" placeholder="password" value="<?php echo $row['mdpsVot'] ?>">
        <input type="text" name="type" placeholder="type" value="<?php echo $row['typeVot'] ?>">
        <input type="submit" value="update" onclick="return confirm('tu peux modifier')" href="id=<?php echo $row["idVot"]  ?>" name="soso">
        <?php endforeach;   ?>

    </form>



</body>
</html>

<?php

if(isset($_POST["soso"])){
    $user=$_POST["user"];
$pswd=$_POST["pswd"];
$type=$_POST["type"];

$cr=$cnx->prepare("update voting set userVot=?,mdpsVot=?,typeVot=? where idVot=? ");
$cr->execute([$user,$pswd,$type,$id]);
echo "data modified";
header("location:supprimer_from_database.php");

}

?>