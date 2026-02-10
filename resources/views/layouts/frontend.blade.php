<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Coredesia - 未来を、もっとPopに。</title>
    <link rel="icon" href="{{ asset('images/coredesia.png') }}" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        // HTMLの読み込みが完了してから実行するお！
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true,
                startEvent: 'DOMContentLoaded', 
            });
            const target = document.getElementById("target-message");
            const html = target.innerHTML;
            let newHtml = "";
            const charArray = Array.from(target.textContent.trim());           
            gsap.registerPlugin(ScrollTrigger);

            gsap.fromTo("#target-message", 
                {
                    autoAlpha: 0,
                    y: 50
                }, 
                {
                    autoAlpha: 1,
                    y: 0,
                    duration: 1.5,
                    ease: "power4.out",
                    scrollTrigger: {
                        trigger: "#target-message",
                        start: "top 85%", // 画面の85%の位置に来たら開始
                    }
                }
        );
        });
    </script>

    <style>
        :root {
            --main-blue: #00d2ff;
            --main-pink: #ff9a9e;
            --soft-bg: #fdfbfb;
            --text-dark: #2d3436;
        }
        body {
            font-family: 'Noto Sans JP', sans-serif;
            background-color: var(--soft-bg);
            color: var(--text-dark);
            line-height: 1.7;
            letter-spacing: 0.02em;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        /* ナビゲーション */
        .navbar {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 3px solid var(--main-blue);
            padding: 1rem 0;
        }
        .navbar-brand {
            font-size: 1.5rem;
            letter-spacing: 1px;
        }
        .nav-link {
            font-weight: 700;
            color: var(--text-dark) !important;
            margin: 0 10px;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: var(--main-blue) !important;
            transform: scale(1.1);
        }
        /* コンテンツエリア */
        .main-wrapper {
            flex: 1;
        }
        /* 共通ボタン */
        .btn-pop {
            background: linear-gradient(45deg, var(--main-blue), #00bcff);
            color: white !important;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: bold;
            border: none;
            box-shadow: 0 4px 15px rgba(0,210,255,0.3);
            transition: 0.3s;
        }
        .btn-pop:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,210,255,0.4);
        }
        /* フッター */
        footer {
            background: #2d3436;
            color: white;
            padding: 3rem 0;
            border-top: 5px solid var(--main-pink);
        }
        /* ページタイトルのヒーローエリア用 */
        .page-header {
            background: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
            padding: 60px 0;
            text-align: center;
            color: white;
            border-radius: 0 0 50px 50px;
            margin-bottom: 3rem;
        }
        h1, h2, h3, h4, .fw-bold {
            font-weight: 700;
            color: #1a1a1a; /* 見出しはより黒く、強く！ */
        }
        .nav-link {
            font-weight: 500;
            letter-spacing: 0.05em;
        }
        /* 動画を背景いっぱいに広げる魔法だにぇ */
        .hero-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            z-index: 1;
            object-fit: cover; /* 隙間なく埋めるお！ */
        }

        /* 動画が明るすぎて文字が見えないのを防ぐお */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
        }

        .z-index-10 {
            z-index: 10;
        }

        .hero-title {
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); /* 文字に影をつけてカッチリさせるお */
            letter-spacing: 0.05em;
        }

        /* ヒーローエリアの高さを調整 */
        .vh-100 {
            height: 100vh;
            min-height: 600px;
        }

        /* ページ全体のベース：うっすらとしたドットパターン */
        .about-body {
            background-color: #ffffff;
            background-image: radial-gradient(#e5e5e5 0.5px, transparent 0.5px);
            background-size: 20px 20px; /* 目立たない程度のドットだにぇ */
        }

        /* ヒーローセクション：柔らかい光のグラデーション */
        .bg-soft-gradient {
            background: radial-gradient(circle at 10% 20%, rgba(216, 241, 250, 0.3) 0%, rgba(255, 255, 255, 1) 90%);
        }

        /* Strong Backbone：少しだけ「岩」のような安定感のあるグレー */
        .bg-backbone {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
        }

        /* 装飾用の薄い円（冒険の軌跡をイメージだお） */
        .decor-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(0, 123, 255, 0.03);
            z-index: 0;
        }
        /* ページ全体のベース演出 */
        .about-wrapper {
            color: #333;
            overflow-x: hidden;
            background-color: #fcfcfc;
        }

        /* ヒーローグラデーション：冒険の夜明けをイメージ */
        .section-hero {
            background: radial-gradient(circle at top right, rgba(230, 244, 255, 0.5), transparent),
                        radial-gradient(circle at bottom left, rgba(255, 240, 245, 0.3), transparent);
            position: relative;
        }

        /* Strong Backbone：信頼の重みを感じる質感 */
        .section-backbone {
            background: linear-gradient(135deg, #f0f4f8 0%, #d9e2ec 100%);
            position: relative;
        }

        /* 薄いグリッド背景：精密な技術（芯）を表現 */
        .bg-grid {
            background-image: 
                linear-gradient(to right, rgba(0,0,0,0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0,0,0,0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* 装飾用のぼかし円：レンズフレアのような幻想的な演出 */
        .orb {
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            filter: blur(80px);
            z-index: 0;
            opacity: 0.4;
        }
        .orb-blue { background: #00d2ff; top: -100px; left: -100px; }
        .orb-pink { background: #ff758c; bottom: -100px; right: -100px; }

        /* 文字の視認性を高める影 */
        .text-shadow-sm {
            text-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
            .profile-section {
            background: linear-gradient(135deg, #ffffff 0%, #f0f4f8 100%);
        }
        .profile-image-container {
            position: relative;
            display: inline-block;
        }
        .profile-image-container::after {
            content: "";
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100%;
            height: 100%;
            border: 2px solid var(--main-blue);
            border-radius: 1rem;
            z-index: 1;
        }
        .profile-img {
            position: relative;
            z-index: 2;
            object-fit: cover;
            border-radius: 1rem;
            background: #e0e0e0; /* 写真がない時のダミー色だお */
        }
        .experience-badge {
            background: var(--main-blue);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
        }

        /* ページ全体のベース：洗練された薄いグレーとグリッド */
        .company-page-wrapper {
            background-color: #f8fafc;
            background-image: 
                linear-gradient(rgba(0, 123, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 123, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            overflow-x: hidden;
        }

        /* 1. 代表挨拶背景：光の差し込みを演出 */
        .section-greeting {
            background: radial-gradient(circle at 0% 0%, rgba(0, 210, 255, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 100% 100%, rgba(255, 117, 140, 0.05) 0%, transparent 50%);
            position: relative;
        }

        /* 2. プロフィール背景：少し濃いめのグラデーションで「芯」を表現 */
        .section-profile {
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
            position: relative;
            border-top: 1px solid rgba(0,0,0,0.05);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        /* 3. 会社概要背景：カッチリしたダーク or ライトの対比 */
        .section-info {
            background: #ffffff;
            position: relative;
        }

        /* 装飾：フローティング・アクセント（冒険の軌跡） */
        .accent-blur {
            position: absolute;
            width: 300px;
            height: 300px;
            background: var(--main-blue);
            filter: blur(100px);
            opacity: 0.1;
            pointer-events: none;
            z-index: 0;
        }

        /* 写真の装飾 */
        .profile-image-container {
            position: relative;
            display: inline-block;
            z-index: 1;
        }
        .profile-image-container::before {
            content: "";
            position: absolute;
            top: -15px;
            left: -15px;
            width: 100px;
            height: 100px;
            border-top: 4px solid var(--main-blue);
            border-left: 4px solid var(--main-blue);
            z-index: 0;
        }
        .profile-img {
            position: relative;
            z-index: 2;
            border-radius: 5px;
            box-shadow: 20px 20px 60px #d1d9e6, -20px -20px 60px #ffffff;
        }

        /* タイポグラフィ */
        .section-title-en {
            font-family: 'Outfit', sans-serif;
            letter-spacing: 0.3em;
            font-size: 0.9rem;
            color: var(--main-blue);
        }
        /* アニメーション前の状態（透明） */
        .animate-text span {
            display: inline-block;
            opacity: 0;
            transform: translateY(20px);
        }
        /* ロゴ自体のサイズ設定だにぇ！ */
        .header-logo-main {
            height: 135px;
            width: auto;
            object-fit: contain;
            padding: 5px 0; /* 上下に少し隙間を作って窮屈さを解消だお */
            transition: transform 0.3s ease;
        }

        /* ロゴが大きくなった分、ナビゲーション全体の余白も少し調整するにぇ */
        .navbar {
            padding: 0.5rem 0 !important; /* バーの太さをロゴに合わせるお */
        }

        /* スマホの時も文字が見えるように粘るお！ */
        @media (max-width: 991.98px) {
            .header-logo-main {
                height: 65px; /* スマホでもしっかり大きく！ */
            }
        }

        /* ロゴにマウスを乗せた時に「生きてる感」を出す演出🌸 */
        .navbar-brand:hover .header-logo-main {
            transform: scale(1.02);
        }
    </style>
    @stack('styles')
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-info" href="/">
                <img src="{{ asset('images/headerlogo.png') }}" class="header-logo-main" alt="Coredesia">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Coredesiaについて</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">事業内容</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('company') }}">会社概要</a></li>
                    <li class="nav-item">
                        <a class="nav-link btn-pop ms-lg-3 mt-2 mt-lg-0" href="{{ route('contact') }}">
                            お問い合わせ <i class="bi bi-chat-heart-fill ms-1"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-wrapper">
        @yield('content')
    </div>

    <footer>
        <div class="container text-center">
            <div class="mb-4">
                <h4 class="fw-bold mb-3">Coredesia</h4>
            </div>
            <hr class="bg-secondary my-4">
            <p class="mb-0 small">&copy; 2026 Coredesia Inc. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>