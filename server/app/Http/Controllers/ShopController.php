<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop;
use Illuminate\Http\Request;
use App\Http\Requests\ShopRequest;

class shopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('shops.index', ['shops' => $shops]);
    }

    public function create()
    {
        return view('shops.create');
    }

    public function store(ShopRequest $request)
    {
        // インスタンスの作成
        $shop = new Shop;

        // 値の用意
        $shop->name = $request->name;
        $shop->timestamps = false;

        // インスタンスに値を設定して保存
        $shop->save();

        // 登録後のデータを返す(idが追加される)
        return redirect('/shops');
    }

    public function show($id)
    {
        // shopモデルから1件を取得
        $shop = Shop::find($id);
        return view('shops.show', ['shop' => $shop]);
    }

    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('shops.edit', ['shop' => $shop]);
    }

    public function update(ShopRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $shop = Shop::find($id);

        // 値の用意
        $shop->name = $request->name;
        $shop->timestamps = false;

        // 保存
        $shop->save();

        // 更新後のデータを返す
        return redirect('/shops');
    }

    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect('/shops');
    }
}
