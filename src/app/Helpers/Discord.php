<?php

namespace App\Helpers;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Discord
{
    /**
     * @throws RequestException
     */
    public static function getToken($code)
    {
        $response = Http::asForm()->post('https://discord.com/api/v8/oauth2/token', [
            'client_id' => config('discord.client_id'),
            'client_secret' => config('discord.client_secret'),
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => config('discord.redirect_uri'),
            'scope' => config('discord.scope'),
        ]);

        if($response->successful()){
            $data = $response->json();
            return $data['access_token'];
        } else {
            throw new RequestException("HTTP request failed with status {$response->status()}", $response->status());
        }
    }

    public static function getUser($accessToken){
        $userResponse = Http::withHeaders([
            'Authorization' => "Bearer $accessToken"
        ])->get('https://discord.com/api/v8/users/@me');

        if($userResponse->successful()){
            $user = $userResponse->json();
            unset($user['email']);
            unset($user['verified']);
            return $user;
        } else {
            return abort(500);
        }
    }

}
