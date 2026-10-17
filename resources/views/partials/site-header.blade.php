{{-- 共通ヘッダー（ヒーロー／見出し帯の中に配置する） --}}
<header class="l-header">
    <a href="{{ route('top') }}" class="l-logo">COREDESIA</a>
    <nav class="l-nav" aria-label="メインメニュー">
        <a href="{{ route('about') }}" @if (request()->routeIs('about')) aria-current="page" @endif>私たちについて</a>
        <a href="{{ route('services') }}" @if (request()->routeIs('services')) aria-current="page" @endif>事業内容</a>
        <a href="{{ route('services.coredx') }}" @if (request()->routeIs('services.coredx')) aria-current="page" @endif>CORE DX PORTAL</a>
        <a href="{{ route('company') }}" @if (request()->routeIs('company')) aria-current="page" @endif>会社概要</a>
        <a href="{{ route('contact') }}" class="l-nav-cta" @if (request()->routeIs('contact*')) aria-current="page" @endif>お問い合わせ</a>
    </nav>
</header>
