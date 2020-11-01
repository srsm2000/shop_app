@extends('layouts.app')

@section('title', '詳細画面')

@section('content')

@if (count($errors) > 0)
    <div>
        <P>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </P>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>プロフィール編集</h1>
<!--更新先はusersのidにしないと増える php artisan rote:listで確認①-->
<form action="/users/{{ $user->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $user->id }}">
    <p>
        ユーザーネーム<br>
        <input type=" text" name="name" value="{{ $user->name }}">
    </p>
    <p>
        メールアドレス<br>
        <input type=" text" name="email" value="{{ $user->email }}">
    </p>
    <p>
        パスワード<br>
        <input type=" text" name="password" value="{{ $user->password }}">
    </p>
    <input type="submit" value="更新">
</form>

@endsection
