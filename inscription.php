<?php
require 'config/init.php';

if(isset($_POST['creerCompte'])) {   
    if(empty($_POST['email'])) {
        echo 'Votre email doit être renseigné';
        echo '<br>';
    }

    if(empty($_POST['mdp'])) {
        echo 'Vous devez choisir un mot de passe';
    }
    
    else{
        $email = $_POST['email'];
        $nom = $_POST['nom'];
        $mdp = $_POST['mdp'];

        $nouveauCompte = "INSERT INTO users (email, nom, mdp) VALUES ('$email', '$nom', '$mdp')";
        $requete = $pdo->prepare($nouveauCompte);
        $requete->execute();

        echo 'Votre compte a bien été créée';

    }
}


?>

<form action="inscription.php" method="post" style="margin: 20px;">
    <label for="email">Entrez votre adresse mail</label>
    <input type="email" name="email" id="email">
<br>
<br>
    <label for="nom">Entrez votre nom</label>
    <input type="text" name="nom" id="nom">
<br>
<br>
    <label for="mdp">Entre votre mot de passe</label>
    <input type="password" name="mdp" id="mdp">
<br>
<br>
    <input type="submit" name="creerCompte" value="Créer mon compte">
</form>