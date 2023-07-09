<?php

namespace App\Http\Controllers\General;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Works extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function page()
    {
        return view('General.works', ['jsonData' => $this->getWorksJson()]);
    }

    private function getWorksJson()
    {
        $url = public_path('json/works.json');
        $json = file_get_contents($url);
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $object = json_decode($json, true);
        return $object;
    }
}
