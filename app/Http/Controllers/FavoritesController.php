<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * micropostをお気に入り登録するアクション。
     *
     * @param  $id  相手micropostのid
     * @return \Illuminate\Http\Response
     */
    public function store($micropostid)
    {
        // 認証済みユーザ（閲覧者）が、 idのmicropostをお気に入りする
        \Auth::user()->favorite($micropostid);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * micropostをお気に入り解除するアクション。
     *
     * @param  $id  相手micropostのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($micropostid)
    {
        // 認証済みユーザ（閲覧者）が、 idのmicropostをお気に入り解除する
        \Auth::user()->unfavorite($micropostid);
        // 前のURLへリダイレクトさせる
        return back();
    }
}

