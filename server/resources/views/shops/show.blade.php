<!-- 商品のidを元に編集ページへ遷移する -->
<h1>{{ $shop->name }}</h1>
<a href="/shops"><button>一覧へ戻る</button></a>
<a href="/shops/{{ $shop->id }}/edit"><button>編集する</button></a>
<form action="/shops/{{ $shop->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    {{-- return falseはリンクに飛ばないようにしている --}}
</form>
