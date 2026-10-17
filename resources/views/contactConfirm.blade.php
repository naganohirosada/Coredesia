@extends('layouts.site')

@section('title', '入力内容の確認｜お問い合わせ｜株式会社Coredesia')

@section('content')
@include('partials.sub-hero', ['en' => 'Contact', 'title' => '入力内容の確認', 'crumbs' => ['お問い合わせ' => route('contact'), '確認' => null]])

<section style="max-width: 960px; margin: 0 auto; padding: 88px 32px 104px">
    <ol class="l-steps" aria-label="入力の手順" style="margin: 0 0 56px; padding: 0; list-style: none; font-size: 14px; text-align: center">
        <li style="padding: 14px; border: 1px solid rgba(233,199,123,0.45); color: #C5C9E0">1　入力</li>
        <li aria-current="step" style="padding: 14px; background: #E9C77B; color: #0F1A3D; font-weight: 700">2　確認</li>
        <li style="padding: 14px; border: 1px solid rgba(233,199,123,0.45); color: #C5C9E0">3　完了</li>
    </ol>
    <p style="margin: 0 0 40px; font-size: 15px; line-height: 2.1; color: #C5C9E0">以下の内容でよろしければ「送信する」を押してください。修正する場合は「入力画面に戻る」を押してください。</p>

    <dl class="l-conf" style="margin: 0; font-size: 15px; line-height: 1.9">
        <dt>お問い合わせ項目</dt><dd>{{ \App\Models\Contact::subjectLabel($inputs['subject']) }}</dd>
        <dt>会社名</dt><dd>{{ ($inputs['company'] ?? '') !== '' ? $inputs['company'] : '（未入力）' }}</dd>
        <dt>お名前</dt><dd>{{ $inputs['name'] }}</dd>
        <dt>メールアドレス</dt><dd>{{ $inputs['email'] }}</dd>
        <dt>お問い合わせ内容</dt><dd style="white-space: pre-wrap">{{ $inputs['message'] }}</dd>
    </dl>

    <form action="{{ route('contact.send') }}" method="POST" style="margin-top: 48px; display: flex; justify-content: center; gap: 20px; flex-wrap: wrap">
        @csrf
        @foreach ($inputs as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
        <button type="button" class="l-btn l-btn-ghost" onclick="history.back()">入力画面に戻る</button>
        <button type="submit" class="l-btn">送信する</button>
    </form>
</section>
@endsection
