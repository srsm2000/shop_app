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

<h1>会員登録</h1>
<form action="/users" method="post">
    @csrf
    <p>
        ユーザーネーム<br>
        <input type="text" name="name">
    </p>
    <p>
        メールアドレス<br>
        <input type="text" name="email">
    </p>
    <p>
        パスワード(6文字以上)<br>
        <input type="text" name="password">
    </p>

    <input type="submit" value="登録">
</form>

@endsection
