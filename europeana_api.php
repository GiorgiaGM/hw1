<?php


//Ritorna un JSON con i risultati dell'API selezionata

require_once 'auth.php';

// Se la sessione è scaduta, esco
if (!checkAuth()) exit;

// Imposto l'header della risposta
header('Content-Type: application/json');

europeana_api();


function europeana_api(){ 

    $apikey='dightpront';

    $query=urldecode($_GET['q']);

    $ch=curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.europeana.eu/record/v2/search.json?wskey=".$apikey."&query=who:".$query);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result= curl_exec($ch);
    curl_close($ch);

    
    echo $result;
}

?>