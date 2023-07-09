<?php

namespace App\Http\Controllers\General;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class Contact extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function page()
    {
        return view('General.contact');
    }

    public function sendEmail(Request $request)
    {
        if (!$request->name) {
            return view('General.contact')->with('unknownRequired', '※名前を記入してください');
        }
        if (!$request->nameKana) {
            return view('General.contact')->with('unknownRequired', '※フリガナを記入してください');
        }
        if (!$request->address) {
            return view('General.contact')->with('unknownRequired', '※メールアドレスを記入してください');
        }
        if (!$request->phone) {
            return view('General.contact')->with('unknownRequired', '※電話番号を記入してください');
        }
        if (!$request->message) {
            return view('General.contact')->with('unknownRequired', '※お問い合わせ内容を記入してください');
        }

        $details = [
            'title' => 'お問い合わせ',
            'company' => $request->company,
            'name' => $request->name,
            'nameKana' => $request->nameKana,
            'address' => $request->address,
            'department' => $request->department,
            'phone' => $request->phone,
            'url' => $request->url,
            'message' => $request->message
        ];

        $request->session()->regenerateToken();
        Mail::to('taqooto@gmail.com')->send(new SendMail($details));
        return view('General.contact')->with('completed', 'メールが送信されました！');
    }
}
