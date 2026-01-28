<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Coredesia - 未来を、もっとPopに。</title>
    
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --main-blue: #00d2ff;
            --main-pink: #ff9a9e;
            --soft-bg: #fdfbfb;
            --text-dark: #4a4a4a;
        }
        body {
            font-family: 'M PLUS Rounded 1c', sans-serif;
            background-color: var(--soft-bg);
            color: var(--text-dark);
            line-height: 1.8;
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
    </style>
    @stack('styles')
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-info" href="/">
                <i class="bi bi-stars me-2"></i>Coredesia
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
                <div class="d-flex justify-content-center gap-3 h4">
                    <a href="#" class="text-white"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <hr class="bg-secondary my-4">
            <p class="mb-0 small">&copy; 2026 Coredesia Inc. All Rights Reserved.</p>
            <small class="text-muted">Designed by Elite Miko 🌸</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>