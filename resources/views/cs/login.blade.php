<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン - エリート管理画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Noto Sans JP', sans-serif;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        .login-header {
            background-color: #fff;
            border-radius: 15px 15px 0 0;
            padding: 2rem 1rem 1rem;
            text-align: center;
        }
        .login-header i {
            font-size: 3rem;
            color: #764ba2;
        }
        .btn-login {
            background: #764ba2;
            border: none;
            padding: 0.8rem;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-login:hover {
            background: #5a397a;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card login-card">
                <div class="login-header">
                    <i class="bi bi-person-circle"></i>
                    <h4 class="mt-3 fw-bold text-secondary">Elite Admin Login</h4>
                    <p class="text-muted small">ログインして業務を開始するんだにぇ！</p>
                </div>
                <div class="card-body p-4 pt-0">
                    
                    {{-- エラーメッセージがある時に表示するお --}}
                    @if ($errors->any())
                        <div class="alert alert-danger py-2 small">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            ログイン情報が正しくないみたいだにぇ…
                        </div>
                    @endif

                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label small fw-bold">メールアドレス</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" id="email" class="form-control" placeholder="example@coredesia.com" required value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label small fw-bold">パスワード</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                                <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-login text-white">
                                ログインするにぇ！ <i class="bi bi-box-arrow-in-right ms-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center bg-white border-0 pb-4">
                    <small class="text-muted">&copy; 2026 Elite Management System</small>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>