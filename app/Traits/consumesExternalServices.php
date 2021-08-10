<?php


namespace App\Traits;
use GuzzleHttp\Client;

trait consumesExternalServices
{

    public function makerequest($method ,$requestUrl,$queryParams=[],$formParams=[],$headers=[],$isJsonRequest=false){



        $client = new Client([

            'base_uri' => $this->baseUri,


        ]);

        $response = $client->request($method, $requestUrl, [
            $isJsonRequest ? 'json' : 'form-params' => $formParams,
            'headers' => $headers,
            'query' => $queryParams
        ]);

        $response = $response->getBody()->getContents();

        return $response;

    }

}
