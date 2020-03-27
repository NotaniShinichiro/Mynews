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
        <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
            <label class="col-md-2">氏名</label>
            <div class="col-md-10">
              <input type="text" class="form-control"  value="{{ old('name') }}" name="name" >
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-md-2">性別</label>
            <div class="col-md-10">
              <input type="text" class="form-control"  value="{{ old('gender') }}" name="gender" >
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-md-2">趣味</label>
            <div class="col-md-10">
              <input type="text" class="form-control"  value="{{ old('hobby') }}" name="hobby" >
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-md-2">自己紹介欄</label>
             <div class="col-md-10">
               <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
             </div>
          </div>
          {{ csrf_field() }}
          <input type="submit" class="btn btn-primary" value="更新">
        </form>
      </div>
    </div>
  </div>
@endsection
