<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "connexion.php";
    $cr=$cnx->prepare("select * from produits");
    $cr->execute();
    $res=$cr->fetchAll();



?>
<a href="./ajouter.php">ajouter</a>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Reference</th>
        <th>quantité</th>
        <th>action</th>
    </tr>
    <?php foreach($res as $row):?>

        <tr>
            <td><?php  echo $row["idPrdt"];?></td>
            <td><?php  echo $row["nomPrdt"];?></td>
            <td><?php  echo $row["refPrdt"];?></td>
            <td><?php  echo $row["quanPrdt"];?></td>
            <td>
                <a href="./update2.php?id=<?php echo $row['idPrdt'];?>">update</a>
                <a href="./delete2.php?id=<?php echo $row['idPrdt'];?>">remove</a>
            </td>

        </tr>
    <?php  endforeach;?>
</table>
</body>
</html>