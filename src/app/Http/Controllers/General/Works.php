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
        $works = $this->getWorksJson();
        return view('General.works', compact('works'));
    }

    public function info($page_name)
    {
        $work = $this->getWork($page_name);
        return view('General.work', compact('work'));
    }

    private function getWorksJson()
    {
        $url = public_path('json/works.json');
        $json = file_get_contents($url);
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $object = json_decode($json, true);
        return $object;
    }

    private function getWork($page_name)
    {
        $works = $this->getWorksJson();
        $works = array_map(function ($data) {
            return $data["works"];
        }, $works);

        $works = collect($works)->flatten(1)->toArray();
        $works = array_filter($works, function ($data) use ($page_name) {
            return $data["page"] == $page_name;
        });

        $works = array_values($works);
        if (count($works) === 0) {
            return abort(404);
        }
        return $works[0];
    }
}
