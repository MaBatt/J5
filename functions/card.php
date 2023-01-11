<?php

function Card(int $id, string $nom, string $description, int $prix, string $date_creation, string $photo) {
    echo 
    '<div style= "border : 2px solid black; width : min-content; padding : 15px">
    <div><img style= "border : 2px solid black;" width="200vw" src="'.$photo.'"/></div>
    <div><h2>'.$nom.'</h2>'.$prix.'€</div>
    <div>'.$description.'</div>
    <div><h6>'.$date_creation.'</h6></div>
    <div>
    <a href="modifier.php?numId='.$id.'"><input type="button" value="Modifier" style="margin: 20px;"></a>
    <form action="index.php" method="POST" style="margin: 20px;">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="submit" name="supprimerProduit" value="Supprimer"></form>
    </div>
    </div>';
}
  
?>

