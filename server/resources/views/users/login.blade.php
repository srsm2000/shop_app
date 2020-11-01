@extends('layouts.app')

@section('title', '詳細画面')

@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
    @if (count($errors) >0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <h1>ログイン</h1>
    <form action="{{ route('user.login') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="text" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">ログイン</button>
        {{ csrf_field() }}
    </form>
    </div>
</div>

@endsection
