<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form method="post">
    <input type="text" name="nom" >
            <input type="text" name="ref">
            <input type="number" name="quan" >

            <input type="submit" value="ajouter" name="mod">
    </form>


    <?php
if(isset($_POST["mod"])){
    require_once "connexion.php";
$nom=$_POST["nom"];
    $ref=$_POST["ref"];
    $quan=$_POST["quan"];
    $cr=$cnx->prepare("insert into produits (nomPrdt,refPrdt,quanPrdt) values(?,?,?) ");
    $cr->execute([$nom,$ref,$quan]);
    header("location: index2.php");
}

?>
</body>
</html>