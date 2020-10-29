@if (count($errors) > 0)
    <div>
        <P>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>会員登録</h1>
<form action="/shops" method="post">
    @csrf
    <p>
        ショップ名<br>
        <input type="text" name="name">
    </p>
    <input type="submit" value="登録">
</form>
