@extends('cs.layouts.base') {{-- 親レイアウトを継承するお！ --}}

@section('title', 'ユーザー一覧')

@section('content')
	{{-- ここからがプロデューサーさんのオリジナルの「中身」だにぇ！ --}}
	<div class="d-flex justify-content-between align-items-center mb-4">
		<h2 class="h3 mb-0 text-gray-800"><i class="bi bi-people-fill me-2"></i>ユーザー一覧</h2>
		<a href="{{ route('cs.users.register') }}" class="btn btn-primary">
			<i class="bi bi-person-plus-fill me-1"></i>新規ユーザー登録
		</a>
	</div>

	<div class="card mb-4 border-0 shadow-sm">
		<div class="card-body">
			<form class="row g-3">
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder="名前やメールで検索...">
				</div>
				<div class="col-md-3">
					<select class="form-select">
						<option selected>すべてのロール</option>
						<option value="1">管理者</option>
						<option value="2">一般ユーザー</option>
					</select>
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-outline-secondary w-100">検索</button>
				</div>
			</form>
		</div>
	</div>

	<div class="table-container">
		<div class="table-responsive">
			<table class="table table-hover align-middle">
				<thead class="table-light">
					<tr>
						<th>ID</th>
						<th>氏名 / カナ</th>
						<th>メールアドレス</th>
						<th>ロール</th>
						<th>最終ログイン</th>
						<th class="text-center">操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>
							<div class="fw-bold">{{ $user->name }}</div>
							<div class="small text-muted">{{ $user->name_kana }}</div>
						</td>
						<td>{{ $user->email }}</td>
						<td>
							@if($user->role == 1)
								<span class="badge bg-danger">管理者</span>
							@else
								<span class="badge bg-secondary">一般</span>
							@endif
						</td>
						<td>{{ $user->last_login_at }}</td>
						<td class="text-center">
							<div class="d-flex justify-content-center gap-2">
								<a href="{{ route('cs.users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary" title="編集するにぇ！">
									<i class="bi bi-pencil-square"></i> 編集
								</a>
								<form action="{{ route('cs.users.destroy', $user->id) }}" method="POST" 
									onsubmit="return confirm('本当に {{ $user->name }} さんを削除してもいいのかにぇ？');">
									@csrf
									<button type="submit" class="btn btn-sm btn-outline-danger" title="削除するにぇ！">
										<i class="bi bi-trash3"></i> 削除
									</button>
								</form>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection