<?php

function getGalere($name){
    $pdo = getConnexion();

    $requete = "SELECT * FROM galeres WHERE nom = '$name'";
    $res = $pdo->query($requete);
    $galere = $res->fetch();

    sendJSON($galere);

    echo "galere " . $name;
}

function getAllGaleres(){
    $pdo = getConnexion();

    $requete = "SELECT * FROM galeres";
    $res = $pdo->query($requete);
    $galere = $res->fetchAll();

    sendJSON($galere);
}

function getConnexion(){
    return new PDO('mysql:host=localhost;dbname=gdg;charset=utf8', 'root', '');
}

function sendJSON($infos){
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($infos, JSON_UNESCAPED_UNICODE);
}

?>