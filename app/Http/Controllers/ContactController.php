<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends BaseController
{
    /**
     * お問い合わせ確認画面表示
     * @param  \App\Http\Requests\ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(ContactRequest $request)
    {
        $inputs = $request->safe()->except(['homepage']);
        return view('contactConfirm', compact('inputs'));
    }

    /**
     * お問い合わせ送信処理
     * 確認画面から送られた値も改ざんされうるため、ここで再度バリデーションする
     * @param  \App\Http\Requests\ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function send(ContactRequest $request)
    {
        $inputs = $request->safe()->except(['agree', 'homepage']);

        // 二重送信防止のため、セッション・トークンを再生成
        $request->session()->regenerateToken();

        // メール送信に失敗しても問い合わせ内容が失われないよう、先にDBへ保存する
        $contact = Contact::create([
            'name'    => $inputs['name'],
            'company' => $inputs['company'] ?? null,
            'email'   => $inputs['email'],
            'subject' => $inputs['subject'],
            'message' => $inputs['message'],
            'ip'      => $request->ip(),
        ]);

        try {
            // お客様へサンクスメール送信
            Mail::to($inputs['email'])->send(new ContactMail($inputs));

            // 管理者への通知メール
            Mail::to(config('mail.contact_to'))->send(new ContactMail($inputs, true));
        } catch (Throwable $e) {
            // メール送信に失敗した場合もお客様には完了画面を表示し、ログで検知できるようにする
            Log::error('お問い合わせメールの送信に失敗しました', [
                'contact_id' => $contact->id,
                'error'      => $e->getMessage(),
            ]);
        }

        return view('contactThanks');
    }
}
