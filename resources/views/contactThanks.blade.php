@extends('layouts.site')

@section('title', '送信完了｜お問い合わせ｜株式会社Coredesia')

@section('content')
@include('partials.sub-hero', ['en' => 'Thank you', 'title' => '送信完了', 'crumbs' => ['お問い合わせ' => route('contact'), '完了' => null]])

<section style="max-width: 960px; margin: 0 auto; padding: 88px 32px 112px; text-align: center">
    <ol class="l-steps" aria-label="入力の手順" style="margin: 0 0 64px; padding: 0; list-style: none; font-size: 14px">
        <li style="padding: 14px; border: 1px solid rgba(233,199,123,0.45); color: #C5C9E0">1　入力</li>
        <li style="padding: 14px; border: 1px solid rgba(233,199,123,0.45); color: #C5C9E0">2　確認</li>
        <li aria-current="step" style="padding: 14px; background: #E9C77B; color: #0F1A3D; font-weight: 700">3　完了</li>
    </ol>
    <h2 style="margin: 0 0 28px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px; line-height: 1.7">お問い合わせ、<br>ありがとうございました。</h2>
    <p style="margin: 0 0 16px; font-size: 16px; line-height: 2.1; color: #C5C9E0">ご入力いただいたメールアドレスに、受付完了のメールをお送りしました。<br>内容を確認のうえ、担当者よりご連絡します。</p>
    <p style="margin: 0 0 48px; font-size: 14px; line-height: 2; color: #C5C9E0">受付完了のメールが届かない場合は、迷惑メールフォルダをご確認ください。</p>
    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap">
        <a href="{{ route('top') }}" class="l-btn" style="padding: 18px 44px">TOPへ戻る</a>
        <a href="{{ route('services.coredx') }}" class="l-btn l-btn-ghost" style="padding: 18px 44px">CORE DX PORTALを見る</a>
    </div>
</section>
@endsection
