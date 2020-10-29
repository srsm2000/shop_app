<h1>ユーザー一覧</h1>
@foreach ($users as $user)
    <a href="/users/{{ $user->id }}">{{ $user->name }}</a><br>
@endforeach
<a href='/users/create'>ユーザー登録</a>