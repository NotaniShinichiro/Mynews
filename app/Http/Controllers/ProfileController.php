<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//laravelが持っているクラスの中でブラウザからの要求をまとめてコントローラーのアクションに渡す為のクラス。


use App\Profile;
class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('updated_at');
        //ProfileはModelクラスで、profilesテーブル担当。allというクラスを使い、テーブルから全件取得している。

        /*if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }*/
        
        //shiftは、配列の初めの要素を返すと同時に、その要素を消す。

        // profile/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('profile.index', ['posts' => $posts]);
    }
}