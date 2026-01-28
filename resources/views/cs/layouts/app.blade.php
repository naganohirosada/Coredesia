<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') - エリート管理画面</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
	<style>
		body { font-family: 'Noto Sans JP', sans-serif; background-color: #f8f9fa; }
		.card { border: none; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); }
		.form-label { font-weight: bold; }
	</style>
</head>
<body>
	@include('layouts.sidebar') {{-- 部品を読み込むにぇ --}}

	<main>
		{{-- ここに各ページの「中身」がバチコーンとはまるんだにぇ！ --}}
		@yield('content')
	</main>

	@stack('scripts') {{-- ページごとのJSをここに流し込むお --}}
</body>
</html>