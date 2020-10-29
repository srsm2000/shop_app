<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class userController extends Controller
{
    public function getLogin()
    {
        return view('users.login');
    }

    public function postLogin(UserRequest $request)
    {
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        // インスタンスの作成
        $user = new User;

        // 値の用意
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->timestamps = false;

        // インスタンスに値を設定して保存
        $user->save();

        // 登録後のデータを返す(idが追加される)
        return redirect('/users');
    }

    public function show($id)
    {
        // userモデルから1件を取得
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $user = User::find($id);

        // 値の用意
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->timestamps = false;

        // 保存
        $user->save();

        // 更新後のデータを返す
        return redirect('/users');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}
