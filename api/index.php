<?php

require_once("api.php");

try{
    if(!empty($_GET['galere'])){
        $url = explode("/", filter_var($_GET['galere'], FILTER_SANITIZE_URL));
        print_r($url);

        if(!empty($url[1])){
            getGalere($url[1]);
        } else {
            getAllGaleres();
        }
    } else {
        throw new Exception ('Problème de récupération de données.');
    }
} catch(Exception $e){
    $error = [
        "message" => $e->getMessage(),
        "code" => $e->getCode()
    ];

    print_r($error);
}


?>