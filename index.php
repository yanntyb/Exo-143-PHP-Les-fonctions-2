<?php

function returnTrue(){
    return true;
}

function returnString($chaine){
    return $chaine;
}

function returnString2($chaine1, $chaine2){
    return $chaine1 . $chaine2;
}

function returnOrdre($nb1,$nb2){
    if($nb1>$nb2){
        return "nb1 > nb2";
    }
    elseif($nb1<$nb2){
        return "nb2 > nb1";
    }
    else{
        return "nb1 = nb2";
    }
}

function returnConcat($chaine,$nb){
    return strval($nb) . $chaine;
}

function salutation($nom,$prenom,$age){
    return "Bonjour " . $nom . " " . $prenom . " tu as " . $age . " ans";
}

function descript($age,$genre){
    if($genre === "homme"){
        $phrase = "Vous etes un homme et vous";
    }
    elseif($genre === "femme"){
        $phrase = "Vous etes une femme et vous";
    }
    else{
        $phrase = "Vous n'avez pas de genre et vous";
    }
    if($age >= 18){
        $phrase = $phrase . " etes majeur";
    }
    elseif($age < 18){
        $phrase = $phrase . " etes mineur";
    }
    else{
        $phrase = $phrase . " n'avez pas dage";
    }
    return $phrase;
}

function summ($nb1 = 0,$nb2 = 0,$nb3 = 0){
    return $nb1 + $nb2 + $nb3;
}