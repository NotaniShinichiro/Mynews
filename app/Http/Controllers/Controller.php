<?php

namespace App\Http\Controllers;
// →appのcontrollersを使用します、という宣言。

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
// →Laravelが用意しているControllerを、一旦、BaseControllerという名前で使用します。
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// →クラスパスを指定して設定することで、クラスを一意にする。(混乱を避けるため)
// →IlluminateはLaravelが提供しているもの。
// →use文は、使用するクラスを宣言する。

class Controller extends BaseController
// → Laravelの提供するcontrollerを継承します、という宣言。
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
