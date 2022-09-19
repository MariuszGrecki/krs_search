<?php

declare(strict_types=1);
namespace App;

require_once("src/Utils/debug.php");
require_once("src/Controller.php");

$request = [
  'get' => $_GET,
  'post' => $_POST
];


$controller = new Controller($request);
$controller->run();



// https://api-krs.ms.gov.pl/api/krs/OdpisPelny/{krs}?rejestr={rejestr}&format=json
// Parametry:

// $krs='0000893244';
// $rejestr='P';

// // {krs} – numer podmiotu w rejestrze KRS
// // {rejestr} – P – przedsiębiorców, S-stowarzyszeń
// // {format} – json (bez względu na wpisany parametr zawsze zwrócony zostanie obiekt w postaci JSON)

// //$api_url2 = 'https://api-krs.ms.gov.pl/api/krs/OdpisAktualny/{krs}?rejestr={rejestr}&format=json

// $api_url = 'https://api-krs.ms.gov.pl/api/krs/OdpisAktualny/'.$krs.'?rejestr='.$rejestr.'&format=json';

// $response = json_decode(file_get_contents($api_url), true);

// dump($response);




//(new Controller($request))->run();
