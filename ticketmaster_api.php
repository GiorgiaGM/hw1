<?php


require_once 'auth.php';

if (!checkAuth()) exit;


header('Content-Type: application/json');

ticketmaster_api();


function ticketmaster_api(){ 

    $apikey='vudKODYExVF3mz8CnWx7oAETLxQZZ6iG';

    $query=urldecode($_GET['q']);

    $ch=curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://app.ticketmaster.com/discovery/v2/events.json?countryCode=".$query."&apikey=".$apikey);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result= curl_exec($ch);
    curl_close($ch);

    
    echo $result;
}

?>