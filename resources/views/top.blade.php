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
                    <a href="{{ route('contact') }}" class="stretched-link"></a>
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