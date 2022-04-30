<?php

namespace victorap93;

class AzureAD
{
    /** 
    * Get a Azure Token using client secret
    */
    public function getAzureTokenBySecret(string $tenant_id, string $client_id, string $scope, string $client_secret): array
    {
        $client = new \GuzzleHttp\Client();
        try {
            $request = $client->request('GET', "https://login.microsoftonline.com/$tenant_id/oauth2/v2.0/token", [
                'form_params' => [
                    'client_id' => $client_id,
                    'scope' => $scope,
                    'grant_type' => 'client_credentials',
                    'client_secret' => $client_secret
                ]
            ]);

            return json_decode((string) $request->getBody());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            return json_decode((string) $response->getBody()->getContents());
        }
    }

    /** 
    * Get a Azure Token using username and password
    */
    public function getAzureTokenByCredentials(string $tenant_id, string $client_id, string $scope, string $username, string $password): array
    {
        $client = new \GuzzleHttp\Client();
        try {
            $request = $client->request('GET', "https://login.microsoftonline.com/$tenant_id/oauth2/v2.0/token", [
                'form_params' => [
                    'client_id' => $client_id,
                    'scope' => $scope,
                    'grant_type' => 'password',
                    'username' => $username,
                    'password' => $password
                ]
            ]);

            return json_decode((string) $request->getBody());
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            return json_decode((string) $response->getBody()->getContents());
        }
    }
}
