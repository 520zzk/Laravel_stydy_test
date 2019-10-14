<?php

namespace App\Http\Controllers\Home;

//操作数据库先引用DB类
//别名可去config/app.php中看是否设置
use DB;
use Illuminate\support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function text(){
        echo "我是Home文件夹下的text方法";
    }

    //
    public function add(){
        $db = DB::table('user');

          $result = $db ->insert([
              [
                  'name'        => 'madongmei',
                  'password'    => '15935741'
              ],
              [
                  'name'        =>  'aaaaa',
                  'password'    =>  '15935741'
              ]
          ]);
          var_dump($result);
    }
    public function updata(){
        $db = DB::table('user');
        $userInput = Input::only(['id','name']);
        if( $userInput['id'] != "" && $userInput['name'] != ''){
             $db ->where('id','=',$userInput['id']) -> update(['name' => $userInput['name']]);
             echo '修改成功';
        }else{
            var_dump('请填写完整数据');
        }

    }
    public function select(){
        $db = DB::table('user');
        $data = $db -> get();

        foreach($data as $key => $value){
            echo "id是： {$value->id}、name是：{$value ->name} <br>";
        }

    }
    //视图传数据
    public function show(){
        $name = 'zzk';
        $content = '我是一名学生';
        // return view('/home/show',['name' =>$name , 'content' => $content]);
        $arr = array('name' => $name , 'content' => $content);

        // 程序转换时间戳前 增加时区设置
        date_default_timezone_set("PRC");
        $time = time();

        var_dump($time);
        // return view('home/show',$arr);       //推荐1
        return view('home/show',compact('name','content','time'));     //推荐第一
    }

    //视图循环

    public function fh(){
        $db = DB::table('user');
        $data = $db -> get();
        // var_dump($data);
        return view('home/foreach',compact('data'));
    }

    //新闻
    public function news(){
        $name = 'zzk';
        $content = '我是一名学生';
        // return view('/home/show',['name' =>$name , 'content' => $content]);
        $arr = array('name' => $name , 'content' => $content);
        
        // 程序转换时间戳前 增加时区设置
        date_default_timezone_set("PRC");
        $time = time();
        
        return view('home/temnew',compact('name','content','time'));
    }
}

?>
