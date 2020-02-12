<?php

namespace App\Http\Controllers\Admin;
// namespaceとは、Appの中の・・・という、クラスの場所を宣言。このコントローラーを使用します。という意味。

use Illuminate\Http\Request;
// ブラウザからの要求が、Illuminateというクラスのインスタンスの中に入る。
// ※インスタンスとは、クラスの分身。
// 例えば、アクセスがあった場合に、そのアクセス数だけ用意される。

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
  //
  public function add()
  {
    return view('admin.news.create');
  }
    
}
