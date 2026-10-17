@extends('layouts.site')

@section('title', '事業内容｜株式会社Coredesia')
@section('description', 'システム開発（Web・アプリ）、HP・LP制作・運用、ITコンサルティング、採用支援（RPO）を提供しています。')

@section('content')
@include('partials.sub-hero', ['en' => 'Services', 'title' => '事業内容', 'crumbs' => ['事業内容' => null]])

<section style="max-width: 1280px; margin: 0 auto; padding: 96px 32px 40px">
<p style="margin: 0 0 40px; max-width: 760px; font-size: 17px; line-height: 2.1; color: #C5C9E0">Coredesiaは、確かな技術（芯）を武器に、お客様の新しい挑戦をデジタルの領域からトータルでサポートします。</p>
<nav class="l-toc" aria-label="事業一覧">
<a href="#web" style="text-decoration: none; border: 1px solid rgba(233,199,123,0.45); padding: 18px 20px; display: flex; gap: 14px; align-items: center"><span style="font-family: 'Zen Old Mincho', serif; font-size: 28px; color: #E9C77B">一</span>システム開発</a>
<a href="#hp" style="text-decoration: none; border: 1px solid rgba(233,199,123,0.45); padding: 18px 20px; display: flex; gap: 14px; align-items: center"><span style="font-family: 'Zen Old Mincho', serif; font-size: 28px; color: #E9C77B">二</span>HP・LP制作・運用</a>
<a href="#consulting" style="text-decoration: none; border: 1px solid rgba(233,199,123,0.45); padding: 18px 20px; display: flex; gap: 14px; align-items: center"><span style="font-family: 'Zen Old Mincho', serif; font-size: 28px; color: #E9C77B">三</span>ITコンサルティング</a>
<a href="#rpo" style="text-decoration: none; border: 1px solid rgba(233,199,123,0.45); padding: 18px 20px; display: flex; gap: 14px; align-items: center"><span style="font-family: 'Zen Old Mincho', serif; font-size: 28px; color: #E9C77B">四</span>採用支援（RPO）</a>
</nav>
</section>

<section id="web" style="max-width: 1280px; margin: 0 auto; padding: 72px 32px; border-bottom: 1px solid rgba(233,199,123,0.25)">
<div class="l-svc-row">
<span style="font-family: 'Zen Old Mincho', serif; font-size: 96px; line-height: 1; color: #E9C77B">一</span>
<div>
<h2 style="margin: 0 0 20px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">システム開発</h2>
<p style="margin: 0 0 24px; font-size: 16px; line-height: 2; color: #C5C9E0">業務システムやWebサービスから、スマートフォンアプリまで。システム開発全般を、企画・設計から開発、公開後の運用まで一貫してお受けします。お客様のビジネスの「芯」を理解し、長く使い続けられる高品質なシステムを提供します。</p>
<p style="margin: 0; font-size: 13px; color: #C5C9E0">主な技術：Laravel ／ Vue.js ／ AWS ／ Google Cloud</p>
</div>
<ul style="margin: 0; padding: 0; list-style: none; font-size: 15px">
<li style="border-top: 1px solid rgba(233,199,123,0.35); padding: 16px 0">業務システム・基幹システム開発</li>
<li style="border-top: 1px solid rgba(233,199,123,0.35); padding: 16px 0">Webサービス・Webアプリケーション開発</li>
<li style="border-top: 1px solid rgba(233,199,123,0.35); padding: 16px 0">スマートフォンアプリ開発</li>
<li style="border-top: 1px solid rgba(233,199,123,0.35); padding: 16px 0">API連携・外部サービス連携</li>
<li style="border-top: 1px solid rgba(233,199,123,0.35); border-bottom: 1px solid rgba(233,199,123,0.35); padding: 16px 0">データベース設計・最適化</li>
</ul>
</div>
</section>

<section id="hp" style="max-width: 1280px; margin: 0 auto; padding: 72px 32px; border-bottom: 1px solid rgba(233,199,123,0.25)">
<div class="l-svc-row">
<span style="font-family: 'Zen Old Mincho', serif; font-size: 96px; line-height: 1; color: #E9C77B">二</span>
<div>
<h2 style="margin: 0 0 20px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">HP・LP制作・運用</h2>
<p style="margin: 0; font-size: 16px; line-height: 2; color: #C5C9E0">企業の顔となるコーポレートサイトや、集客に特化したランディングページ（LP）を制作します。公開して終わりではなく、データに基づいた改善提案や保守運用まで一貫してサポートします。</p>
</div>
<ul style="margin: 0; padding: 0; list-style: none; font-size: 15px; display: flex; flex-direction: column; gap: 0">
<li style="border-top: 1px solid rgba(233,199,123,0.35); padding: 16px 0">コーポレートサイト制作</li>
<li style="border-top: 1px solid rgba(233,199,123,0.35); padding: 16px 0">セールス特化型LP制作</li>
<li style="border-top: 1px solid rgba(233,199,123,0.35); border-bottom: 1px solid rgba(233,199,123,0.35); padding: 16px 0">CMS（WordPress等）導入・保守</li>
</ul>
</div>
</section>

<section id="consulting" style="max-width: 1280px; margin: 0 auto; padding: 72px 32px; border-bottom: 1px solid rgba(233,199,123,0.25)">
<div class="l-svc-row">
<span style="font-family: 'Zen Old Mincho', serif; font-size: 96px; line-height: 1; color: #E9C77B">三</span>
<div>
<h2 style="margin: 0 0 20px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">ITコンサルティング</h2>
<p style="margin: 0; font-size: 16px; line-height: 2; color: #C5C9E0">「何から手をつければいいかわからない」という段階から並走します。DX推進のアドバイスや、最適な技術選定、開発チームのビルディングなど、お客様の「冒険」を技術的な視点でナビゲートします。</p>
</div>
<ul style="margin: 0; padding: 0; list-style: none; font-size: 15px">
<li style="border-top: 1px solid rgba(233,199,123,0.35); padding: 16px 0">DX導入支援・アドバイザリー</li>
<li style="border-top: 1px solid rgba(233,199,123,0.35); padding: 16px 0">社内システム最適化提案</li>
<li style="border-top: 1px solid rgba(233,199,123,0.35); border-bottom: 1px solid rgba(233,199,123,0.35); padding: 16px 0">技術選定・アーキテクチャ設計</li>
</ul>
</div>
</section>

<section id="rpo" style="max-width: 1280px; margin: 0 auto; padding: 72px 32px">
<div class="l-svc-row">
<span style="font-family: 'Zen Old Mincho', serif; font-size: 96px; line-height: 1; color: #E9C77B">四</span>
<div>
<h2 style="margin: 0 0 20px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">採用支援<br><span style="font-size: 22px">ハンズオン型RPO</span></h2>
<p style="margin: 0 0 24px; font-size: 16px; line-height: 2; color: #C5C9E0">自社に採用の知見を持った人材を迎えたような、「本当のパートナー」となる採用支援です。採用戦略の設計と、日々の採用実務の両方を一体で担います。</p>
<div style="display: grid; gap: 16px">
<div style="border-left: 2px solid #E9C77B; padding-left: 16px"><p style="margin: 0 0 4px; font-weight: 700">採用上流の戦略パートナー</p><p style="margin: 0; font-size: 14px; line-height: 1.9; color: #C5C9E0">貴社の状況やカルチャーに合わせた採用戦略を一緒に考え、実行まで伴走します。</p></div>
<div style="border-left: 2px solid #E9C77B; padding-left: 16px"><p style="margin: 0 0 4px; font-weight: 700">実務のリソース解消</p><p style="margin: 0; font-size: 14px; line-height: 1.9; color: #C5C9E0">面接調整やスカウト送付、各採用サービスとのやり取りや改善活動まで対応します。</p></div>
</div>
</div>
<div style="border: 1px solid rgba(233,199,123,0.6); padding: 32px; background: rgba(30,42,107,0.45)">
<p style="margin: 0 0 8px; font-size: 13px; letter-spacing: 0.2em; color: #E9C77B">PLAN</p>
<h3 style="margin: 0 0 20px; font-family: 'Zen Old Mincho', serif; font-size: 22px">ご利用料金</h3>
<table style="width: 100%; border-collapse: collapse; font-size: 14px">
<thead><tr><th scope="col" style="text-align: left; padding: 10px 0; color: #C5C9E0; font-weight: 400; border-bottom: 1px solid rgba(233,199,123,0.35)">プラン</th><th scope="col" style="text-align: left; padding: 10px 0; color: #C5C9E0; font-weight: 400; border-bottom: 1px solid rgba(233,199,123,0.35)">期間・稼働</th><th scope="col" style="text-align: right; padding: 10px 0; color: #C5C9E0; font-weight: 400; border-bottom: 1px solid rgba(233,199,123,0.35)">料金（税別）</th></tr></thead>
<tbody>
<tr><th scope="row" style="text-align: left; padding: 14px 0; border-bottom: 1px solid rgba(233,199,123,0.2)">トライアル<br><span style="font-size: 12px; font-weight: 400; color: #C5C9E0">〜6ヶ月</span></th><td style="padding: 14px 0; border-bottom: 1px solid rgba(233,199,123,0.2)">月40時間〜<br>3ヶ月〜</td><td style="text-align: right; padding: 14px 0; border-bottom: 1px solid rgba(233,199,123,0.2)">360,000円〜<br><span style="font-size: 12px; color: #C5C9E0">月あたり120,000円〜</span></td></tr>
<tr><th scope="row" style="text-align: left; padding: 14px 0">ご継続<br><span style="font-size: 12px; font-weight: 400; color: #C5C9E0">7ヶ月〜</span></th><td style="padding: 14px 0">月40時間〜<br>2ヶ月〜</td><td style="text-align: right; padding: 14px 0">400,000円〜<br><span style="font-size: 12px; color: #C5C9E0">月あたり200,000円〜</span></td></tr>
</tbody>
</table>
<p style="margin: 16px 0 0; font-size: 12px; color: #C5C9E0">※お申し込みに必要な最短プランです。</p>
</div>
</div>
</section>

<section style="background: rgba(30,42,107,0.35); border-top: 1px solid rgba(233,199,123,0.25); border-bottom: 1px solid rgba(233,199,123,0.25)">
<div style="max-width: 1280px; margin: 0 auto; padding: 96px 32px">
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B; text-align: center">Flow</p>
<h2 style="margin: 0 0 48px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px; text-align: center">ご相談の流れ</h2>
<ol class="l-flow" style="margin: 0; padding: 0; list-style: none">
<li style="border: 1px solid rgba(233,199,123,0.45); padding: 28px 22px"><p style="margin: 0 0 10px; font-family: Montserrat, sans-serif; font-weight: 700; color: #E9C77B">01</p><p style="margin: 0 0 8px; font-weight: 700">お問い合わせ</p><p style="margin: 0; font-size: 13px; line-height: 1.9; color: #C5C9E0">フォームからご相談内容をお送りください。</p></li>
<li style="border: 1px solid rgba(233,199,123,0.45); padding: 28px 22px"><p style="margin: 0 0 10px; font-family: Montserrat, sans-serif; font-weight: 700; color: #E9C77B">02</p><p style="margin: 0 0 8px; font-weight: 700">ヒアリング</p><p style="margin: 0; font-size: 13px; line-height: 1.9; color: #C5C9E0">課題や目指す姿をお伺いします。</p></li>
<li style="border: 1px solid rgba(233,199,123,0.45); padding: 28px 22px"><p style="margin: 0 0 10px; font-family: Montserrat, sans-serif; font-weight: 700; color: #E9C77B">03</p><p style="margin: 0 0 8px; font-weight: 700">ご提案・お見積もり</p><p style="margin: 0; font-size: 13px; line-height: 1.9; color: #C5C9E0">進め方と費用をご提示します。</p></li>
<li style="border: 1px solid rgba(233,199,123,0.45); padding: 28px 22px"><p style="margin: 0 0 10px; font-family: Montserrat, sans-serif; font-weight: 700; color: #E9C77B">04</p><p style="margin: 0 0 8px; font-weight: 700">開発・制作</p><p style="margin: 0; font-size: 13px; line-height: 1.9; color: #C5C9E0">進捗を共有しながら進めます。</p></li>
<li style="border: 1px solid rgba(233,199,123,0.45); padding: 28px 22px"><p style="margin: 0 0 10px; font-family: Montserrat, sans-serif; font-weight: 700; color: #E9C77B">05</p><p style="margin: 0 0 8px; font-weight: 700">公開・運用</p><p style="margin: 0; font-size: 13px; line-height: 1.9; color: #C5C9E0">公開後の改善や保守も支援します。</p></li>
</ol>
</div>
</section>

<section>
<div style="max-width: 1280px; margin: 0 auto; padding: 88px 32px; display: flex; justify-content: space-between; align-items: center; gap: 32px; flex-wrap: wrap">
<p style="margin: 0; font-family: 'Zen Old Mincho', serif; font-size: 28px; line-height: 1.7">まずは、お気軽にご相談ください。</p>
<a href="{{ route('contact') }}" style="text-decoration: none; background: #E9C77B; color: #0F1A3D; font-weight: 700; padding: 18px 36px; border-radius: 999px">お問い合わせ</a>
</div>
</section>
@endsection
