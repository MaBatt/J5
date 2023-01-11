<?php
require 'config/init.php';

if(isset($_POST['ajoutProduit'])){
        if(empty($_POST['nom']))
            echo '<div style="color : red;">
            Le champs Nom est obligatoire </div>';
            echo'<br>';
            
        if(empty($_POST['prix']))
            echo '<div style="color : red;">
            Le champs Prix est obligatoire </div>';

        else{
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];
            
            $nouveauProduit = "INSERT INTO produits (nom, description, prix) VALUES ('$nom','$description','$prix')";
            $requete = $pdo->prepare($nouveauProduit);
            $requete->execute();

            echo '<div style="color : green;">
            Votre produit a bien été ajouté</div>';
        }
    }
?>

<title>Ajout d'un produit</title>
    


<form action="creer.php" method="post" style="margin: 20px;">
    <label for="nom">Ecrivez le nom de votre produit</label>
    <input type="nom" name="nom" id="nom">

    <label for="description">Décrivez votre produit</label>
    <input type="text" name="description" id="description">

    <label for="prix">Indiquez le prix de votre produit</label>
    <input type="number" name="prix" id="prix">

    <br>
    <br>

    <center><input type="submit" name="ajoutProduit" value="Ajoutez votre produit"></center>
</form>
