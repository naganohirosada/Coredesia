@extends('layouts.frontend')

@section('title', 'TOP')

@section('content')
    <header class="hero-section mb-5">
        <div class="container">
            <h1 class="hero-title mb-4">未来を、もっとPopに。</h1>
            <p class="lead mb-5 text-secondary fw-bold">エリートな技術と遊び心で、新しい世界を創るんだにぇ！</p>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-pop btn-lg">詳しく見るお！</button>
                <button class="btn btn-outline-info btn-lg rounded-pill px-4">私たちの想い</button>
            </div>
        </div>
    </header>

    <section class="container py-5">
        <h2 class="text-center fw-bold mb-5">なにをしてるのかにぇ？</h2>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card pop-card h-100 p-4 bg-white border-0 shadow-sm">
                    <i class="bi bi-rocket-takeoff text-info h1 mb-3"></i>
                    <h5 class="fw-bold">次世代開発</h5>
                    <p class="small text-muted">最新の技術を使って、ワクワクするアプリを作るお！</p>
                </div>
            </div>
            <div class="col-md-4">
                {{-- ここだけアクセントで枠線をつけてみたお！ --}}
                <div class="card pop-card h-100 p-4 bg-white border-bottom border-info border-4 shadow-sm">
                    <i class="bi bi-lightbulb text-warning h1 mb-3"></i>
                    <h5 class="fw-bold">コンサルティング</h5>
                    <p class="small text-muted">エリートな視点で、ビジネスの悩みをバチコーンと解決！</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card pop-card h-100 p-4 bg-white border-0 shadow-sm">
                    <i class="bi bi-chat-heart text-danger h1 mb-3"></i>
                    <h5 class="fw-bold">コミュニティ</h5>
                    <p class="small text-muted">笑顔があふれる居場所を、テクノロジーで創るんだにぇ。</p>
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