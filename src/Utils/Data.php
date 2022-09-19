<?php

declare(strict_types=1);

class SearchData
{
public static $response;

public static function getDataFromKrs(array $request) 
{
    $request['krsType']=='Przedsiębiorstwo'?$request['krsType']='P':$request['krsType']='S';
    $api_url = 'https://api-krs.ms.gov.pl/api/krs/OdpisAktualny/'.$request['krsNumber'].'?rejestr='.$request['krsType'].'&format=json';
    self::$response = json_decode(file_get_contents($api_url), true); 
}
}


