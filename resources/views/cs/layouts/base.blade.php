<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') - エリート管理システム</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
	<style>
		body { background-color: #f8f9fa; font-family: 'Noto Sans JP', sans-serif; }
		/* サイドバーのスタイルだにぇ */
		#sidebar {
			min-width: 250px;
			max-width: 250px;
			min-height: 100vh;
			background: #212529;
			color: #fff;
			transition: all 0.3s;
		}
		#sidebar .nav-link {
			color: rgba(255,255,255,0.8);
			padding: 12px 20px;
			border-radius: 0;
		}
		#sidebar .nav-link:hover, #sidebar .nav-link.active {
			color: #fff;
			background: #343a40;
			border-left: 4px solid #0d6efd;
		}
		.main-content { width: 100%; padding: 20px; }
	</style>
</head>
<body>

<div class="d-flex">
	<nav id="sidebar" class="d-md-block collapse">
		<div class="p-4">
			<h3 class="h5 fw-bold text-center mb-4"><i class="bi bi-cpu-fill me-2"></i>Elite Admin</h3>
			<hr class="text-secondary">
			<ul class="nav flex-column mt-3">
				<li class="nav-item">
					<a href="{{ route('cs.users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
						<i class="bi bi-people-fill me-2"></i> ユーザー管理
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="bi bi-building me-2"></i> 会社概要管理
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="bi bi-envelope-paper-fill me-2"></i> お問い合わせ管理
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="bi bi-briefcase-fill me-2"></i> 事業内容管理
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="bi bi-person-badge-fill me-2"></i> 社員プロフィール管理
					</a>
				</li>
			</ul>
		</div>
		
		<div class="mt-auto p-4 w-100">
			<form action="{{ route('logout') }}" method="POST">
				@csrf
				<button class="btn btn-outline-danger w-100 btn-sm">
					<i class="bi bi-box-arrow-left"></i> ログアウトだにぇ
				</button>
			</form>
		</div>
	</nav>

	<div class="main-content">
		<header class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
			<h1 class="h4 mb-0">@yield('title')</h1>
			<div class="text-muted small">ログイン中: <strong>{{ auth()->user()->name }}</strong></div>
		</header>

		@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
				{{ session('success') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			</div>
		@endif

		@yield('content')
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>