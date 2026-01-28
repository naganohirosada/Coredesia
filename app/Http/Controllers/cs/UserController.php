<?php

namespace App\Http\Controllers\cs;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class UserController extends BaseController
{
	// ここで変数を宣言するんだにぇ！
    private $users;

    public function __construct()
    {
        $this->users = new User();
    }
	
	/**
	 * ユーザー一覧表示
	 * @return \Illuminate\Http\Response
	 * 
	 */
	public function index()
	{
		$users = $this->users->all()->sortBy('last_login_at');
		return view('cs.user.list', compact('users'));
	}

	/**
	 * ユーザー登録画面表示
	 * @return \Illuminate\Http\Response
	 */
	public function register()
	{
		return view('cs.user.register');
	}

	 /**
	  * ユーザー保存
	  * @param  \Illuminate\Http\Request  $request
	  * @return \Illuminate\Http\Response
	  */
	public function store(Request $request)
	{
		$savedData = $request->all();
        // ユーザー作成
		$this->users->fill($savedData)->save();

		return redirect()->route('cs.users.index')->with('success', '登録完了だにぇ！🌸');
	}

	/**
	 * ユーザー編集画面表示
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 * 
	 */
	public function edit($id) {
		$user = $this->users->find($id);
		return view('cs.user.edit', compact('user'));
	}

	/**
	 * ユーザー削除
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);

		if (auth()->id() == $user->id) {
			return back()->with('error', '自分自身は削除できないんだにぇ…！');
		}

		// 削除実行！
		$user->delete();

		// 一覧画面に戻って、成功メッセージを出すお
		return redirect()->route('cs.users.index')->with('success', 'ユーザーを削除したんだにぇ！🌸');
	}
}
