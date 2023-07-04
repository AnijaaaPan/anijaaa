<?php

namespace App\Helpers;

use App\Helpers\Api\Account\Profile;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

class Dragonfly
{
    public static function hasUser($id)
    {
        return Redis::exists('User:'.$id);
    }

    public static function setUser($key, $value): void
    {
        Redis::set('User:'.$key, encrypt($value));
    }

    public static function deleteUser($key): void
    {
        Redis::delete('User:'.$key);
    }

    public static function getUser($id)
    {

    }
}
