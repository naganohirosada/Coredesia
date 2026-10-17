<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '株式会社Coredesia（コアデシア）')</title>
    <meta name="description" content="@yield('description', '株式会社Coredesia（コアデシア）の公式サイトです。Webシステム開発・アプリケーション開発、HP・LP制作、ITコンサルティング、採用支援、自社プロダクト「CORE DX PORTAL」を提供しています。')">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="株式会社Coredesia">
    <meta property="og:title" content="@yield('title', '株式会社Coredesia（コアデシア）')">
    <meta property="og:description" content="@yield('description', '株式会社Coredesia（コアデシア）の公式サイトです。')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('images/coredesia.png') }}" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@500;700;900&family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Cormorant+Garamond:ital,wght@1,500&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    {{-- ビルド工程を使わず、更新日時でキャッシュを更新する --}}
    <link rel="stylesheet" href="{{ asset('css/site.css') }}?v={{ filemtime(public_path('css/site.css')) }}">

    @include('partials.analytics')

    <script type="application/ld+json">
        @verbatim
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "株式会社Coredesia",
                "url": "https://coredesiainc.com",
                "address": {
                    "@type": "PostalAddress",
                    "postalCode": "812-0061",
                    "addressRegion": "福岡県",
                    "addressLocality": "福岡市東区",
                    "streetAddress": "筥松2-6-9 バアウ・ハウス・カミング 2-1-c",
                    "addressCountry": "JP"
                }
            }
        @endverbatim
    </script>
</head>
<body>
    <a class="l-skip" href="#main">本文へスキップ</a>
    <main id="main">
        @yield('content')
    </main>
    @include('partials.site-footer')
    <script>
        // ハンバーガーメニューの開閉（狭い画面のみボタンが表示される）
        (function () {
            var btn = document.querySelector('.l-burger');
            var nav = document.getElementById('l-nav');
            if (!btn || !nav) return;
            function setOpen(open) {
                btn.setAttribute('aria-expanded', open ? 'true' : 'false');
                btn.setAttribute('aria-label', open ? 'メニューを閉じる' : 'メニューを開く');
                nav.classList.toggle('is-open', open);
                document.body.classList.toggle('is-menu-open', open);
            }
            btn.addEventListener('click', function () {
                setOpen(btn.getAttribute('aria-expanded') !== 'true');
            });
            nav.addEventListener('click', function (e) {
                if (e.target.closest('a')) setOpen(false);
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && nav.classList.contains('is-open')) {
                    setOpen(false);
                    btn.focus();
                }
            });
            window.matchMedia('(min-width: 901px)').addEventListener('change', function (mq) {
                if (mq.matches) setOpen(false);
            });
        })();
    </script>
</body>
</html>
