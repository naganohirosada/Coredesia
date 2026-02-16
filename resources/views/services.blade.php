@extends('layouts.frontend')

@section('title', '事業内容 - Service')

@section('content')
<style>
    /* サービス全体の背景演出 */
    .service-wrapper {
        background-color: #f4f7f9;
        background-image: radial-gradient(#d1d9e6 0.5px, transparent 0.5px);
        background-size: 30px 30px;
        overflow-x: hidden;
    }

    /* サービスカードの基本設定 */
    .service-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 20px;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1);
        background: rgba(255, 255, 255, 1);
    }

    /* サービス番号の装飾 */
    .service-number {
        font-family: 'Outfit', sans-serif;
        font-size: 4rem;
        font-weight: 900;
        color: rgba(0, 210, 255, 0.05);
        position: absolute;
        top: -10px;
        right: 10px;
        z-index: 0;
    }

    /* アイコン部分 */
    .service-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%);
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 10px 20px rgba(58, 123, 213, 0.3);
    }

    /* ぼかし背景のアクセント */
    .bg-orb {
        position: fixed;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        filter: blur(120px);
        z-index: 0;
        opacity: 0.15;
        pointer-events: none;
    }
    /* 深みのあるプレミアム・ネイビーグラデーション */
    .cta-gradient-bg {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        position: relative;
        overflow: hidden;
    }

    /* うっすらとした光の筋を加えて視認性をサポート */
    .cta-gradient-bg::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -20%;
        width: 140%;
        height: 200%;
        background: radial-gradient(circle, rgba(0, 210, 255, 0.07) 0%, transparent 70%);
        pointer-events: none;
    }

    /* ボタンのホバーエフェクトを強化 */
    .btn-cta {
        background: #00d2ff;
        border: none;
        color: #0f172a !important;
        transition: all 0.3s ease;
        letter-spacing: 0.05em;
    }

    .btn-cta:hover {
        background: #ffffff;
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0, 210, 255, 0.4);
    }
</style>

<div class="service-wrapper position-relative">
    <div class="bg-orb" style="background: #00d2ff; top: -100px; left: -200px;"></div>
    <div class="bg-orb" style="background: #ff758c; bottom: -100px; right: -200px;"></div>

    <section class="py-5 text-center">
        <div class="container py-5">
            <span class="text-info fw-bold mb-2 d-block" style="letter-spacing: 0.3em;" data-aos="fade-down">OUR SERVICE</span>
            <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">事業内容</h2>
            <p class="text-secondary mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-delay="200">
                Coredesiaは、確かな技術（芯）を武器に、お客様の新しい挑戦をデジタルの領域からトータルでサポートします。
            </p>
        </div>
    </section>

    <section class="pb-5">
        <div class="container pb-5">
            <div class="row g-4">
                
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card p-4 p-lg-5 h-100">
                        <div class="service-number">01</div>
                        <div class="service-icon"><i class="bi bi-cpu"></i></div>
                        <h3 class="fw-bold mb-3">Webシステム開発</h3>
                        <p class="text-secondary lh-lg">
                            Laravel等のモダンなフレームワークを活用し、業務効率化ツールから大規模なプラットフォームまで、拡張性の高いシステムを構築します。お客様のビジネスの「芯」を理解し、長く使い続けられる高品質なコードを提供します。
                        </p>
                        <ul class="list-unstyled text-info small mt-4">
                            <li><i class="bi bi-check2 me-2"></i>業務基幹システム構築</li>
                            <li><i class="bi bi-check2 me-2"></i>API連携・開発</li>
                            <li><i class="bi bi-check2 me-2"></i>データベース設計・最適化</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card p-4 p-lg-5 h-100">
                        <div class="service-number">02</div>
                        <div class="service-icon"><i class="bi bi-window-sidebar"></i></div>
                        <h3 class="fw-bold mb-3">HP・LP制作・運用</h3>
                        <p class="text-secondary lh-lg">
                            企業の顔となるコーポレートサイトや、集客に特化したランディングページ（LP）を制作します。公開して終わりではなく、データに基づいた改善提案や保守運用まで一貫してサポートします。
                        </p>
                        <ul class="list-unstyled text-info small mt-4">
                            <li><i class="bi bi-check2 me-2"></i>コーポレートサイト制作</li>
                            <li><i class="bi bi-check2 me-2"></i>セールス特化型LP制作</li>
                            <li><i class="bi bi-check2 me-2"></i>CMS（WordPress等）導入・保守</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card p-4 p-lg-5 h-100">
                        <div class="service-number">03</div>
                        <div class="service-icon"><i class="bi bi-lightbulb"></i></div>
                        <h3 class="fw-bold mb-3">ITコンサルティング</h3>
                        <p class="text-secondary lh-lg">
                            「何から手をつければいいかわからない」という段階から並走します。DX推進のアドバイスや、最適な技術選定、開発チームのビルディングなど、お客様の「冒険」を技術的な視点でナビゲートします。
                        </p>
                        <ul class="list-unstyled text-info small mt-4">
                            <li><i class="bi bi-check2 me-2"></i>DX導入支援・アドバイザリー</li>
                            <li><i class="bi bi-check2 me-2"></i>社内システム最適化提案</li>
                            <li><i class="bi bi-check2 me-2"></i>技術選定・アーキテクチャ設計</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 cta-gradient-bg text-white text-center">
        <div class="container py-5 position-relative" style="z-index: 1;" data-aos="zoom-in">
            <h3 class="fw-bold mb-4 display-6" style="letter-spacing: 0.1em; color: #f8fafc;">
                あなたのアイデアを、確かな形に。
            </h3>
            
            <p class="mb-5 fs-5 mx-auto" style="max-width: 700px; color: #cbd5e1; line-height: 1.8;">
                まずはお気軽にご相談ください。<br class="d-md-none">
                共に新しい景色を見に行きましょう。
            </p>
            
            <!-- <a href="/contact" class="btn btn-cta btn-lg px-5 py-3 rounded-pill fw-bold shadow-lg">
                お問い合わせはこちら <i class="bi bi-arrow-right-short ms-1"></i>
            </a> -->
        </div>
    </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    // カードがふわっと浮かび上がる個別アニメーション
    gsap.utils.toArray('.service-card').forEach((card, i) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: "top 90%",
            },
            opacity: 0,
            y: 30,
            duration: 0.8,
            ease: "power2.out",
            delay: i * 0.1
        });
    });
</script>
@endsection