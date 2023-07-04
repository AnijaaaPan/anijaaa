<?php

namespace App\Http\Controllers\Discord;

use App\Helpers\Discord;
use App\Helpers\Dragonfly;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class oauth extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function redirect()
    {
        return redirect('https://discord.com/api/oauth2/authorize?client_id=' . config('discord.client_id')
            . '&redirect_uri=' . config('discord.redirect_uri')
            . '&response_type=code&scope=' . config('discord.scope')
        );
    }

    public function handleCallback(Request $request)
    {
        if($request->has('code')){
            $accessToken = Discord::getToken($request->get('code'));
            $user = Discord::getUser($accessToken);
            if(Dragonfly::hasUser($user['id'])){

            }
            dd($user);
        }else{
            abort(404);
        }
    }
}
