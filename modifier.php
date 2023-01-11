<?php
require 'config/init.php';

$requete = $pdo->prepare("SELECT * FROM produits WHERE id = :num");
$requete->bindValue(":num",$_GET['numId'], PDO::PARAM_INT);
$rq = $requete->execute();

$produit = $requete->fetch();



    $requete = $pdo->prepare("UPDATE produits SET nom=:nom, description=:description, prix=:prix WHERE id=:num LIMIT 1");

    $requete->bindValue(":num",$_POST['numId'], PDO::PARAM_INT);
    $requete->bindValue(":nom",$_POST['nom'], PDO::PARAM_STR);
    $requete->bindValue(":description",$_POST['description'], PDO::PARAM_STR);
    $requete->bindValue(":prix",$_POST['prix'], PDO::PARAM_INT);

    $rq = $requete->execute();

    if($requete) {
        echo 'Le produit a bien été mis à jour';
    } else {
        echo 'La mise à jour a échouée';
    }

 
?>



<form action="modifier.php" method="post" style="margin: 20px;">
    <input type="hidden" name="numId" value="<?=$produit['id']?>">
<br>
<br>
    <label for="nom">Modifiez le nom de votre produit</label>
    <input type="nom" name="nom" id="nom" value="<?=$produit['nom']?>">
<br>
<br>
    <label for="description">Modifiez votre description produit</label>
    <input type="text" name="description" id="description" value="<?=$produit['description']?>">
<br>
<br>
    <label for="prix">Modifier le prix de votre produit</label>
    <input type="number" name="prix" id="prix" value="<?=$produit['prix']?>">
<br>
<br>
    <input type="submit" name="validerModif" value="Valider les modifications">
</form> 