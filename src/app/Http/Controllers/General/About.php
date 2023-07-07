<?php

namespace App\Http\Controllers\General;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class About extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function page()
    {
        return view('General.About');
    }
}