<?php
declare(strict_types=1);
require '../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;
use Guzzle\Http\Exception\BadResponseException;

class SearchData 
{
public static $response;

public static function getDataFromKrs(array $request) 
{
    
    $request['krsType']!='Stowarzyszenie'?$request['krsType']='P':$request['krsType']='S';

    $api_url = 'https://api-krs.ms.gov.pl/api/krs/OdpisAktualny/'.htmlspecialchars(trim($request['krsNumber']), ENT_QUOTES, "UTF-8").'?rejestr='.$request['krsType'].'&format=json';

    $client = new \GuzzleHttp\Client();

    try{
        $response = $client->request('GET',  $api_url);
        if($response->getStatusCode()=='200'){
        self::$response = json_decode((string)$response->getBody(), true);
        } else {
            self::$response = ['Error'=>'Client Does Not Exists'];
        }
    } catch( ClientException $e){
        $status = $e->getResponse()->getStatusCode();
        if($status==404){
            self::$response = ['Error'=>'Client Does Not Exists'];
        } else if ($status==500){
            self::$response = ['Error'=>'Server Error'];
        } else {
            self::$response = ['Error'=>'Error'];
        };
    }
 
}
}


