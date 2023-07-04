<?php

namespace App\Http\Controllers\Top;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Home extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function page()
    {
        return view('Top.home');
    }
}
