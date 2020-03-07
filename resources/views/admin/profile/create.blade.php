{{-- layouts/admin.blade.phpを読み込む --}}

{{--layoutの中のadmin(adminというレイアウト)を使用する、という意味の宣言--}}
@extends('layouts.profile')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィールの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>プロフィール新規作成</h2>
      </div>
    </div>
  </div>
@endsection
