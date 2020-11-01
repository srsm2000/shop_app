@extends('layouts.app')

@section('title', 'ユーザー')

@section('content')

<!-- 商品のidを元に編集ページへ遷移する -->
<h1>{{ $user->name }}</h1>
<p>{{ $user->email }}</p>
<a href="/users"><button>一覧へ戻る</button></a>
<a href="/users/{{ $user->id }}/edit"><button>編集する</button></a>
<form action="/users/{{ $user->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    {{-- return falseはリンクに飛ばないようにしている --}}
</form>

@endsection
