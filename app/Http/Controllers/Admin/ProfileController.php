<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
  // add　プロフィールの新規作成画面を表示するアクション。
  public function add()
  {
    return view('admin.profile.create');
  }
  
  // create 入力されたプロフィールをデータベースに保存するアクション。
  public function create()
  {
    return redirect ('admin/profile/create');
  }
  
  // edit 既に登録されているプロフィールの編集画面を表示するアクション。
  public function edit()
  {
    // viewとは、resources/views/admin/profile/edit.blade.php を、画面に変換して返す。
    return view('admin.profile.edit');
  }
  
  // update 入力されたプロフィール情報で、データベースを更新するアクション。
  public function update()
  {
    // redirectとは、指定したURLをRoutingに渡し、対応するアクションを起動する。
    return redirect('admin/profile/edit');
  }
  
  
}

// redirectとは、Routingに処理を戻す。指定したURLに対応するアクションを起動する。
