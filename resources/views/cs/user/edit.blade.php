@extends('cs.layouts.base') {{-- 親レイアウトを継承だにぇ！ --}}

@section('title', 'ユーザー編集 - ' . $user->name)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10"> {{-- 画面を広めに使って入力しやすくするお --}}
        <div class="card shadow-sm border-0">
            <div class="card-header bg-success text-white py-3">
                <h5 class="mb-0"><i class="bi bi-pencil-square me-2"></i>ユーザー情報の編集だにぇ！</h5>
            </div>
            <div class="card-body p-4">
                
                <form action="{{ route('cs.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT') {{-- 編集はPUTメソッドを使うのがお約束だにぇ --}}

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">氏名</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="name_kana" class="form-label fw-bold">氏名（カナ）</label>
                            <input type="text" name="name_kana" id="name_kana" class="form-control @error('name_kana') is-invalid @enderror" value="{{ old('name_kana', $user->name_kana) }}">
                            @error('name_kana') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">メールアドレス</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <hr class="my-4">

                    <div class="mb-4 p-3 border rounded bg-light">
                        <label class="form-label fw-bold"><i class="bi bi-shield-lock me-1"></i>権限設定</label>
                        
                        {{-- ログイン中のユーザーが管理者(1)なら変更可能にするお --}}
                        @if(auth()->user()->role == 1)
                            <select class="form-select" name="role">
                                <option value="1" {{ old('role', $user->role) == 1 ? 'selected' : '' }}>管理者 (Admin)</option>
                                <option value="2" {{ old('role', $user->role) == 2 ? 'selected' : '' }}>一般ユーザー (User)</option>
                            </select>
                            <small class="text-muted mt-2 d-block">※管理者は他のユーザーの権限を変更できるんだにぇ！</small>
                        @else
                            {{-- 一般ユーザーは表示のみだにぇ --}}
                            <div class="alert alert-secondary mb-2 py-2">
                                現在の権限：<strong>{{ $user->role == 1 ? '管理者' : '一般ユーザー' }}</strong>
                            </div>
                            <input type="hidden" name="role" value="{{ $user->role }}">
                            <small class="text-danger">※あなたの権限では変更できないんだにぇ。残念だにぇ！</small>
                        @endif
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('cs.users.index') }}" class="btn btn-outline-secondary px-4">
                            <i class="bi bi-arrow-left"></i> 戻る
                        </a>
                        <button type="submit" class="btn btn-success px-5 fw-bold text-white">
                            更新を保存するにぇ！
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection