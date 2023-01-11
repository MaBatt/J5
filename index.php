<?php
require 'config/init.php';

//suppression d'articles
if(isset($_POST['supprimerProduit'])){
    $id = $_POST['id'];
    $requete = "DELETE FROM produits WHERE id = $id";
    $rq = $pdo->prepare($requete);
    $rq->execute();

    echo '<div style="color : green;">Votre produit a bien été supprimé</div>';
}



include 'components/Head.html';
?>

    <title>Accueil</title>
    
<?php
include 'components/Header.html';
include 'functions/card.php';



//Création des card
    $requete = "SELECT * FROM produits";
    $rq = $pdo->prepare($requete);
    $rq->execute();
    
    $resultat = $rq->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultat as $r){
    Card($r['id'], $r['nom'], $r['description'],$r['prix'], $r['date_creation'], $r['photo']);
    }


    


?>



<?php
include 'components/Footer.html';
?>