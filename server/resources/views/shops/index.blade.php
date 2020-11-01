@extends('layouts.app')

@section('title', 'ショップ一覧')

@section('content')
<h1>ショップ一覧</h1>
@foreach ($shops as $shop)
    <a href="/shops/{{ $shop->id }}">{{ $shop->name }}</a><br>
@endforeach
<a href='/shops/create'>ショップ登録</a>

@endsection
