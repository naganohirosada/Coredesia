@extends('layouts.frontend')

@section('title', 'TOP')

@section('content')
    <header class="hero-section position-relative overflow-hidden vh-100 d-flex align-items-center">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="{{ asset('videos/toppage.mp4') }}" type="video/mp4">
        </video>

        <div class="hero-overlay"></div>

        <div class="container position-relative z-index-10 text-center">
            <h1 class="hero-title text-white mb-4 display-3 fw-bold">
                想いの「芯」を、<br class="d-md-none">ワクワクする「冒険」へ。
            </h1>
            <p class="lead mb-5 text-white fw-bold fs-4">
                確かな技術と自由な発想で、アイデアをカタチにする。
            </p>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-pop btn-lg px-5">サービス</button>
                <button class="btn btn-outline-light btn-lg rounded-pill px-4">私たちについて</button>
            </div>
        </div>
    </header>

    <section class="container py-5 text-center">
        <p class="fs-5 lh-lg mb-0 text-dark animate-text" id="target-message">
            私たち <strong style="font-weight: 900;">Coredesia（コアデシア）</strong> は、<br>
            揺るぎない <strong style="font-weight: 900;">「芯」</strong> を持つ技術力と、自由な <strong style="font-weight: 900;">「冒険心」</strong> を掛け合わせ、<br><br>
            日本全国、そして世界という広大な舞台へ、<br>
            お客様のアイデアを加速させます。<br><br>
            あなたの <strong style="font-weight: 900;">「想い」</strong> に深く寄り添い、<br>
            共に新しい景色を見にいく最高のパートナーとして、歩み続けます。
        </p>
    </section>

    <!-- CORE DX PORTAL サービス紹介セクション -->
    <section class="coredx-product-intro" style="padding: 80px 20px; background-color: #f8fafc; font-family: 'Helvetica Neue', Arial, 'Hiragino Kaku Gothic ProN', sans-serif;">
        <div style="max-width: 1100px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; gap: 50px;">
            
            <!-- 左側：プロダクトの紹介文 -->
            <div style="flex: 1; min-width: 320px;">
                <div style="display: inline-block; background-color: #e0f2fe; color: #0369a1; font-size: 12px; font-weight: bold; padding: 4px 12px; border-radius: 20px; margin-bottom: 15px;">
                    自社開発プロダクト / IT導入補助金対象ツール
                </div>
                <h2 style="font-size: 28px; font-weight: 800; color: #1e3a8a; margin: 0 0 20px 0; line-height: 1.4;">
                    中小企業・建築業のバックオフィスを一元化<br>
                    <span style="color: #3b82f6;">CORE DX PORTAL</span>
                </h2>
                <p style="font-size: 15px; color: #4a5568; line-height: 1.7; margin: 0 0 25px 0;">
                    勤怠管理、カンバンによる現場タスク管理、電子稟議（ワークフロー）、そしてインボイス対応の請求書発行まで、バラバラだった社内業務を単一のプラットフォームでシームレスに連携。現場とバックオフィスの生産性を劇的に向上させます。
                </p>
                
                <!-- 特徴箇条書き -->
                <ul style="list-style: none; padding: 0; margin: 0 0 35px 0; font-size: 14px; color: #2c3e50;">
                    <li style="margin-bottom: 10px; display: flex; align-items: center;">
                        <span style="color: #3b82f6; margin-right: 8px; font-weight: bold;">✔</span> 現場ごとのリアルタイムな工数・原価管理を実現
                    </li>
                    <li style="margin-bottom: 10px; display: flex; align-items: center;">
                        <span style="color: #3b82f6; margin-right: 8px; font-weight: bold;">✔</span> 毎月の請求・月締め業務を数時間へ大幅に短縮
                    </li>
                    <li style="margin-bottom: 10px; display: flex; align-items: center;">
                        <span style="color: #3b82f6; margin-right: 8px; font-weight: bold;">✔</span> スマホ対応で、現場からの稟議申請・決裁もスムーズ
                    </li>
                </ul>

                <!-- サービス詳細へのリンク導線 -->
                <a href="{{ route('services.coredx') }}" style="display: inline-block; background-color: #3b82f6; color: #ffffff; font-weight: bold; padding: 14px 35px; border-radius: 6px; text-decoration: none; box-shadow: 0 4px 6px -1px rgba(59,130,246,0.2); transition: background 0.2s;">
                    CORE DX PORTAL の詳細を見る
                </a>
            </div>

            <!-- 右側：実際のシステム画面イメージ（ダッシュボード画像） -->
            <div style="flex: 1.2; min-width: 320px;">
                <div style="position: relative; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04); border-radius: 10px; overflow: hidden; border: 1px solid #e2e8f0; background-color: #ffffff;">
                    <img src="{{ asset('images/screenshot_dashboard.png') }}" alt="CORE DX PORTAL ダッシュボード画面" style="width: 100%; height: auto; display: block;">
                    
                    <!-- 画像上の補助金アピールバッジ -->
                    <div style="position: absolute; top: 15px; right: 15px; background-color: #ef4444; color: #ffffff; font-size: 12px; font-weight: bold; padding: 6px 14px; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.15);">
                        補助金活用で最大2/3補助！
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container py-5">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card pop-card h-100 p-4 bg-white border-bottom border-info border-4 shadow-sm position-relative">
                    <i class="bi bi-rocket-takeoff text-info h1 mb-3"></i>
                    <h5 class="fw-bold">Services</h5>
                    <p class="small text-muted">確かな技術をで<br>理想のカタチを、創り上げる！</p>
                    <a href="{{ route('services') }}" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card pop-card h-100 p-4 bg-white border-bottom border-warning border-4 shadow-sm position-relative">
                    <i class="bi bi-compass text-warning h1 mb-3"></i> <h5 class="fw-bold">Our Core</h5>
                    <p class="small text-muted">ブレない「芯」があるからこそ、<br>大胆な挑戦ができる！</p>
                    <a href="{{ route('about') }}" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card pop-card h-100 p-4 bg-white border-bottom border-danger border-4 shadow-sm position-relative">
                    <i class="bi bi-chat-heart text-danger h1 mb-3"></i>
                    <h5 class="fw-bold">Contact</h5>
                    <p class="small text-muted">まずは、お気軽にご相談ください！</p>
                    <a href="mailto:nagano_hirosada@coredesia.com?subject=お問い合わせ&body=株式会社Coredesia様%0D%0A%0D%0Aお問い合わせ内容：" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* このページ専用の追加スタイルだにぇ */
    .hero-section {
        padding: 100px 0;
        background: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
        border-radius: 0 0 50px 50px;
        text-align: center;
    }
    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        color: #fff;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.1);
    }
    .pop-card {
        border-radius: 25px;
        transition: transform 0.3s;
    }
    .pop-card:hover {
        transform: translateY(-10px) rotate(2deg);
    }
</style>
@endpush