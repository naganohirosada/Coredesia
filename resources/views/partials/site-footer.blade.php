{{-- 共通フッター --}}
<footer class="l-footer">
    <div class="l-foot">
        <div>
            <p style="margin: 0 0 12px; font-family: Montserrat, sans-serif; font-weight: 700; letter-spacing: 0.12em; font-size: 18px; color: #F3F1EA">COREDESIA</p>
            <p style="margin: 0; line-height: 1.9">株式会社Coredesia（興亜グループ）<br>〒812-0061 福岡県福岡市東区筥松2-6-9<br>バアウ・ハウス・カミング 2-1-c</p>
        </div>
        <nav aria-label="フッターメニュー" style="display: flex; flex-direction: column; gap: 10px">
            <a href="{{ route('about') }}">Coredesiaについて</a>
            <a href="{{ route('services') }}">事業内容</a>
            <a href="{{ route('services.coredx') }}">CORE DX PORTAL</a>
            <a href="{{ route('company') }}">会社概要</a>
        </nav>
        <nav aria-label="サポートメニュー" style="display: flex; flex-direction: column; gap: 10px">
            <a href="{{ route('contact') }}">お問い合わせ</a>
            <a href="{{ route('privacy') }}">プライバシーポリシー</a>
        </nav>
    </div>
    <p style="margin: 40px 0 0; padding-top: 24px; border-top: 1px solid rgba(233,199,123,0.2)">&copy; {{ date('Y') }} Coredesia Inc.</p>
</footer>
