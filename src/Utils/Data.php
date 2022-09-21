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
    
    $request['krsType']=='Przedsiębiorstwo'?$request['krsType']='P':$request['krsType']='S';
    $api_url = 'https://api-krs.ms.gov.pl/api/krs/OdpisAktualny/'.$request['krsNumber'].'?rejestr='.$request['krsType'].'&format=json';

    $client = new \GuzzleHttp\Client();
    try{
        $response = $client->request('GET',  $api_url);
        self::$response = json_decode((string)$response->getBody(), true);
    } catch( ClientException $e){
        if($e->getResponse()->getStatusCode()==404){
            self::$response = ['Error'=>'Client Does Not Exists'];
        } else if ($e->getResponse()->getStatusCode()==500){
            self::$response = ['Error'=>'Server Error'];
        } else {
            dump($e->getResponse()->getStatusCode()==404);
            self::$response = ['Error'=>'Error'];
        };
    }
 
}
}


