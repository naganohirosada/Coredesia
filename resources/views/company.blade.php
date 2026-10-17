@extends('layouts.site')

@section('title', '会社概要・代表挨拶｜株式会社Coredesia')
@section('description', '株式会社Coredesia（コアデシア）の会社概要と代表挨拶です。')

@section('content')
@include('partials.sub-hero', ['en' => 'Company', 'title' => '会社概要', 'crumbs' => ['会社概要' => null]])

<section style="max-width: 1280px; margin: 0 auto; padding: 104px 32px 80px">
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">CEO Message</p>
<div class="l-msg">
<div>
<h2 style="margin: 0 0 32px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px; line-height: 1.8">デジタルの力で、誰もが<br>「冒険」を楽しめる世界を創りたい。</h2>
<div style="font-size: 16px; line-height: 2.2; color: #C5C9E0">
<p style="margin: 0 0 24px">私は長年エンジニアとして、多くのシステム開発に携わってきました。その中で強く感じたのは、どんなに優れた技術も、そこに「想い」と「ワクワク」がなければ、真に価値のあるものは生まれないということです。</p>
<p style="margin: 0 0 24px">株式会社Coredesiaは、昭和16年から続く株式会社興亜の「ものづくりへの誠実さ」を受け継ぎ、そこに現代のIT機動力を掛け合わせた新しい形のテックカンパニーです。</p>
<p style="margin: 0">お客様の抱える課題の「芯（Core）」を捉え、共に未知なる可能性（Desia）へ向けて歩む。私たちは、あなたの最高の「冒険の仲間」であり続けることをお約束します。</p>
</div>
<p style="margin: 36px 0 0; font-size: 14px; color: #C5C9E0">株式会社Coredesia 代表取締役</p>
<p style="margin: 6px 0 0; font-family: 'Zen Old Mincho', serif; font-size: 28px">長野 弘禎</p>
</div>
<aside style="border: 1px solid rgba(233,199,123,0.45); padding: 16px; background: rgba(30,42,107,0.35)">
<img src="{{ asset('images/ceo.jpg') }}" alt="代表取締役 長野弘禎" style="width: 100%; display: block; aspect-ratio: 4 / 5; object-fit: cover">
<div style="padding: 24px 8px 8px">
<p style="margin: 0; font-family: 'Zen Old Mincho', serif; font-size: 22px">長野 弘禎</p>
<p style="margin: 4px 0 20px; font-size: 13px; color: #E9C77B">Hirosada Nagano ／ CEO &amp; Full Stack Engineer</p>
<p style="margin: 0 0 16px; font-size: 13px; line-height: 2; color: #C5C9E0">2018年よりエンジニアとしてのキャリアをスタート。大手企業の基幹システムから小規模なWebサービスまで、幅広い開発プロジェクトを経験。フリーランスとして独立後、技術のみならずビジネスの「芯」を捉える提案力を武器に、数々のプロジェクトに携わる。2025年5月、株式会社Coredesiaとして興亜グループのテックカンパニーを始動。</p>
<p style="margin: 0; font-size: 13px; line-height: 1.9"><span style="color: #E9C77B">Specialty</span><br>Webシステム開発（Laravel ／ Vue.js）<br>クラウドインフラ構築（AWS ／ Google Cloud）<br>DX推進・ITコンサルティング</p>
</div>
</aside>
</div>
</section>

<section style="max-width: 1280px; margin: 0 auto; padding: 80px 32px">
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Profile</p>
<h2 style="margin: 0 0 40px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">会社情報</h2>
<dl class="l-prof" style="margin: 0; font-size: 15px; line-height: 1.9">
<dt>会社名</dt><dd>株式会社Coredesia（コアデシア）</dd>
<dt>設立</dt><dd>1995年（平成7年）2月16日</dd>
<dt>商号変更</dt><dd>2025年5月20日 株式会社Coredesiaに商号変更</dd>
<dt>代表取締役</dt><dd>長野 弘禎</dd>
<dt>所在地</dt><dd>〒812-0061 福岡県福岡市東区筥松2-6-9 バアウ・ハウス・カミング 2-1-c</dd>
<dt>法人番号</dt><dd>1290002004812</dd>
<dt>親会社</dt><dd><a href="https://www.ko-ua.co.jp/" target="_blank" rel="noopener" style="color: #E9C77B">株式会社興亜</a><br><span style="font-size: 13px; color: #C5C9E0">〒811-2112 福岡県糟屋郡須恵町大字植木字中野1883-1</span></dd>
<dt>事業内容</dt><dd>Webシステム開発・アプリケーション開発<br>HP・LP制作・運用<br>ITコンサルティング<br>採用支援（RPO）<br>自社プロダクト「CORE DX PORTAL」の開発・提供</dd>
</dl>
</section>

<section style="max-width: 1280px; margin: 0 auto; padding: 80px 32px 104px">
<p style="margin: 0 0 16px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Access</p>
<h2 style="margin: 0 0 32px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 34px">アクセス</h2>
<p style="margin: 20px 0 0; font-size: 15px; line-height: 1.9">〒812-0061 福岡県福岡市東区筥松2-6-9 バアウ・ハウス・カミング 2-1-c</p>
</section>
@endsection
