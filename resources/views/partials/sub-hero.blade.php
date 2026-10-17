{{--
    下層ページ共通の見出し帯
    @param string $en     英字の小見出し（例：Contact）
    @param string $title  ページ見出し
    @param array  $crumbs パンくず（['表示名' => 'URL または null']）
--}}
<section class="l-sky-sub" style="position: relative; overflow: hidden">
    <svg viewBox="0 0 1440 400" preserveAspectRatio="xMidYMid slice" aria-hidden="true" style="position: absolute; left: 0; top: 0; width: 100%; height: 100%">
        <defs><filter id="sDust" x="0" y="0" width="100%" height="100%"><feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="1" seed="5"/><feColorMatrix values="0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 11 -8.6"/></filter></defs>
        <rect width="1440" height="300" fill="#fff" filter="url(#sDust)" opacity="0.8"/>
        <g class="l-tw1" fill="#fff"><circle cx="120" cy="60" r="1.4"/><circle cx="410" cy="34" r="1.1"/><circle cx="690" cy="88" r="1.6"/><circle cx="960" cy="40" r="1.2"/><circle cx="1230" cy="76" r="1.5"/><circle cx="1360" cy="150" r="1"/></g>
        <g class="l-tw2" fill="#fff"><circle cx="250" cy="130" r="1.2"/><circle cx="560" cy="160" r="1"/><circle cx="820" cy="22" r="1.3"/><circle cx="1100" cy="128" r="1.1"/><circle cx="60" cy="190" r="1"/></g>
    </svg>
    @include('partials.site-header')
    <div style="position: relative; max-width: 1280px; margin: 0 auto; padding: 88px 32px 24px">
        <p style="margin: 0 0 12px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 24px; color: #E9C77B">{{ $en }}</p>
        <h1 class="l-h1" style="margin: 0; font-family: 'Zen Old Mincho', serif; font-weight: 900; font-size: 48px; text-shadow: 0 0 20px rgba(255,236,200,0.4)">{{ $title }}</h1>
        <nav aria-label="パンくずリスト" style="margin: 20px 0 0; font-size: 13px; color: #DDE2F5">
            <a href="{{ route('top') }}" style="color: #DDE2F5">TOP</a>
            @foreach ($crumbs as $label => $url)
                　／　@if ($url)<a href="{{ $url }}" style="color: #DDE2F5">{{ $label }}</a>@else<span aria-current="page">{{ $label }}</span>@endif
            @endforeach
        </nav>
    </div>
    <svg viewBox="0 200 1440 200" preserveAspectRatio="none" aria-hidden="true" style="position: relative; display: block; width: 100%; height: 140px">
        <path d="M0 400L0 230L11 234L45 238L79 241L112 248L146 252L180 260L214 263L248 263L281 267L315 261L349 258L382 265L416 268L450 265L484 265L518 266L551 265L585 263L619 266L652 264L686 260L720 255L754 254L788 253L821 261L855 270L889 276L922 274L956 275L990 275L1024 268L1058 269L1091 270L1125 266L1159 258L1192 246L1226 247L1260 244L1294 240L1328 247L1361 250L1395 254L1429 251L1440 250L1440 400Z" fill="#1D2360"/>
        <path d="M0 400L0 308L11 307L45 304L79 300L112 299L146 296L180 296L214 296L248 295L281 294L315 295L349 294L382 293L416 293L450 295L484 299L518 303L551 305L585 306L619 304L652 305L686 306L720 309L754 307L788 307L821 307L855 307L889 305L922 301L956 298L990 295L1024 293L1058 293L1091 293L1125 292L1159 293L1192 296L1226 298L1260 299L1294 299L1328 298L1361 297L1395 296L1429 292L1440 292L1440 400Z" fill="#0F1A3D"/>
    </svg>
</section>
