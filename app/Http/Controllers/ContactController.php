<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends BaseController
{
    /**
     * お問い合わせ確認画面表示
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(ContactRequest $request)
    {
        $inputs = $request->validated();
        return view('contactConfirm', compact('inputs'));
    }

    /**
     * お問い合わせ送信処理
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $inputs = $request->all();
        // 二重送信防止のため、セッション・トークンを再生成
        $request->session()->regenerateToken();
        // お客様へサンクスメール送信
        Mail::to($inputs['email'])->send(new ContactMail($inputs));

        // 管理者への通知メール
        Mail::to(config('mail.from.address'))->send(new ContactMail($inputs, true));

        // DB保存
        Contact::create([
            'name'    => $inputs['name'],
            'company' => $inputs['company'],
            'email'   => $inputs['email'],
            'subject' => $inputs['subject'],
            'message' => $inputs['message'],
            'ip'      => $request->ip(),
        ]);

        return view('contactThanks');
    }
}
