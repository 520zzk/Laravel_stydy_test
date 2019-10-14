<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Input;

class zzkController extends Controller
{

    public function text(){
        echo "我是zzk";
    }
    public function InputContent(){
        echo '地址栏?age=001&id=002&name=ssss&id=556&status=false';
        $a = Input::all();
        echo '<br>输出全部---Input::all();<br>';
        var_dump($a);

        $b = Input::get('id','xxx');
        echo "<br><br>获取ID参数,没有则默认------Input::get('id','xxx')<br>";
        var_dump($b);

        $c = Input::get('name');
        echo "<br><br>获取指定的单个name参数------Input::get('name');<br>";
        var_dump($c);

        $d = Input::only(['id','name']);
        echo "<br><br>获取指定的多个参数------Input::only(['id','name']);<br>";
        var_dump($d);

        $e = Input::except(['id']);
        echo "<br><br>获取除了id以外的参数------Input::excepet(['id']);<br>";
        var_dump($e);

        $f = Input::has('status');
        echo "<br><br>判断status是否有------Input::has('status');<br>";
        var_dump($f);
    }
}
