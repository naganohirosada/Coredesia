<?php

use Illuminate\Support\Facades\Route;

// フロントページ
Route::get('/',  [App\Http\Controllers\PageController::class, 'top'])->name('top');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('services');
Route::get('/company', [App\Http\Controllers\PageController::class, 'company'])->name('company');
Route::get('/privacy', function () {
    return view('privacy');
});


// CS画面
// ログイン関連
Route::get('/login', [App\Http\Controllers\cs\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\cs\AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [App\Http\Controllers\cs\AuthController::class, 'logout'])->name('logout');

// 認証済み（ログイン中）の人だけが入れるグループにするにぇ！
Route::middleware(['auth'])->group(function () {
    // 管理ユーザー一覧
    Route::get('/cs/users', [App\Http\Controllers\cs\UserController::class, 'index'])->name('cs.users.index');
    // 管理ユーザー作成フォーム
    Route::get('/cs/users/register', [App\Http\Controllers\cs\UserController::class, 'register'])->name('cs.users.register');
    // 管理ユーザー保存
    Route::post('/cs/users/store', [App\Http\Controllers\cs\UserController::class, 'store'])->name('cs.users.store');
    // 管理ユーザー編集
    Route::get('/cs/users/{id}/edit', [App\Http\Controllers\cs\UserController::class, 'edit'])->name('cs.users.edit');
    // 管理ユーザー更新
    Route::post('/cs/users/update', [App\Http\Controllers\cs\UserController::class, 'update'])->name('cs.users.update');
    // 管理ユーザー削除
    Route::post('/cs/users/{id}/destroy', [App\Http\Controllers\cs\UserController::class, 'destroy'])->name('cs.users.destroy');

});