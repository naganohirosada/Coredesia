@extends('cs.layouts.base') {{-- 親レイアウトを継承！ --}}

@section('title', 'ユーザー新規登録')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10"> {{-- サイドバーがあるから少し横幅を広めに調整したにぇ --}}
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white py-3">
                <h5 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i>ユーザー新規登録</h5>
            </div>
            <div class="card-body p-4">
                {{-- バリデーションエラーがあったら上に出してあげるにぇ --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="userRegisterForm" method="POST" action="{{ route('cs.users.store') }}" novalidate>
                    @csrf
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">氏名</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" placeholder="田中 太郎" value="{{ old('name') }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name_kana" class="form-label">氏名（カナ）</label>
                            <input type="text" class="form-control @error('name_kana') is-invalid @enderror" 
                                   id="name_kana" name="name_kana" placeholder="テスト タロウ" value="{{ old('name_kana') }}" required>
                            @error('name_kana') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">メールアドレス</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" placeholder="example@coredesia.com" value="{{ old('email') }}" required>
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">パスワード</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                   id="password" name="password" required>
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">パスワード（確認）</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">権限ロール</label>
                        <select class="form-select" id="role" name="role">
                            <option value="1" {{ old('role') == 1 ? 'selected' : '' }}>管理者 (Admin)</option>
                            <option value="2" {{ old('role') == 2 ? 'selected' : '' }}>一般ユーザー (User)</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('cs.users.index') }}" class="btn btn-secondary px-4">キャンセル</a>
                        <button type="submit" class="btn btn-primary px-5 fw-bold">登録するにぇ！</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- JSは親の @stack('scripts') に流し込むのがエリートだお！ --}}
@push('scripts')
<script>
    document.getElementById('userRegisterForm').addEventListener('submit', function(event) {
        if (!this.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        this.classList.add('was-validated');
    }, false);
</script>
@endpush