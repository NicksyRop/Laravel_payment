<?php


namespace App\Traits;
use GuzzleHttp\Client;

trait consumesExternalServices
{

    public function makerequest($method ,$requestUrl,$queryParams=[],$formParams=[],$headers=[],$isJsonRequest=false){



        $client = new Client([

            'base_uri' => $this->baseUri,


        ]);
        if(method_exists($this,'resolveAuthorization')){
            $this->resolveAuthorization($queryParams,$headers,$formParams);

        };


        $response = $client->request($method, $requestUrl, [
            $isJsonRequest ? 'json' : 'form-params' => $formParams,
            'headers' => $headers,
            'query' => $queryParams
        ]);

        $response = $response->getBody()->getContents();

        if(method_exists($this,'decodeResponse')){
            $response= $this->decodeResponse($response);

        }


        return $response;

    }

}
