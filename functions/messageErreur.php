<?php

function messageErreur(int $e) {
    $e = 'Erreur';
    $mErreur = '<div><p style = color : red;>'.$e.'</p></div>';
    return $mErreur;
}


?>