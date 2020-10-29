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

<h1>ショップ編集</h1>
<!--更新先はshopsのidにしないと増える php artisan rote:listで確認①-->
<form action="/shops/{{ $shop->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $shop->id }}">
    <p>
        ショップ名<br>
        <input type=" text" name="name" value="{{ $shop->name }}">
    </p>
    <input type="submit" value="更新">
</form>
