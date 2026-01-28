<?php

namespace App\Http\Controllers\cs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    // ログイン画面を出すお
    public function showLogin() {
        return view('cs.login');
    }

    // ログイン処理をするお
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 照合開始だにぇ！
        if (Auth::attempt($credentials)) {
            // ログイン成功したら、最終ログイン日時を更新するにぇ！
            $user = Auth::user();
            $user->last_login_at = now();
            $user->save();
            $request->session()->regenerate(); // セキュリティのためにIDを新しくするお
            return redirect()->intended('cs/users'); // ユーザー一覧へGO！
        }

        return back()->withErrors(['email' => 'ログインに失敗したお…']);
    }

    // ログアウト処理
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}