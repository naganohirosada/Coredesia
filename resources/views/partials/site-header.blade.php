{{-- 共通ヘッダー（ヒーロー／見出し帯の中に配置する） --}}
<header class="l-header">
    <a href="{{ route('top') }}" class="l-logo"><img src="{{ asset('images/logo/coredesia-logo-color-on-dark.svg') }}" alt="Coredesia" width="202" height="36"></a>
    {{-- スマホ・タブレット幅でのみ表示するハンバーガーボタン --}}
    <button type="button" class="l-burger" aria-controls="l-nav" aria-expanded="false" aria-label="メニューを開く">
        <span></span><span></span><span></span>
    </button>
    <nav id="l-nav" class="l-nav" aria-label="メインメニュー">
        <a href="{{ route('about') }}" @if (request()->routeIs('about')) aria-current="page" @endif>私たちについて</a>
        <a href="{{ route('services') }}" @if (request()->routeIs('services')) aria-current="page" @endif>事業内容</a>
        <a href="{{ route('company') }}" @if (request()->routeIs('company')) aria-current="page" @endif>会社概要</a>
        <a href="{{ route('contact') }}" class="l-nav-cta" @if (request()->routeIs('contact*')) aria-current="page" @endif>お問い合わせ</a>
    </nav>
</header>
