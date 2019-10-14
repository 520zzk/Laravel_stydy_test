<?php
namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\Input;
use DB;
class testController extends Controller
{
    //
	public function csrf(){
		return view('test/csrf');
	}
    public function csrf_data(){
        $name = Input::get('name');
        echo ($name).'<br>';
        echo '不清楚这里是啥';
    }

    //验证
    public function from(Request $request){
        // echo $request;
        if(Input::method() == "POST"){
            $this -> validate( $request,[
                'name' => "required|min:2|max:5",
                'password' => "required",
                'email' => "required"
            ]);
            echo '<h1>验证成功</h1><a href="/validate">点击返回</a>';
        }else{
             return  view('test/validate');
        }

    }

    //文件上传
    public function file_form(Request $request){
        if(Input::method() == 'POST'){
            echo '我提交了';
            if( $request -> hasFile('filedata') && $request -> file('filedata')->isValid() && $_POST['name'] != '' && $_POST['password'] != ''){
                $post_file = $request -> file('filedata');
                $fileSize = $post_file -> getClientSize();          //文件的大小
                $fileName = $post_file ->getClientOriginalName();   //文件名称
                $fileType = $post_file ->getClientOriginalExtension();  //文件后缀

                $imgAllType = array('jpg','png','jpeg','png');
                if(in_array($fileType,$imgAllType)){
                    $imgUrl = md5(time().rand(10000,99999)).'.'.$fileType;
                    $post_file -> move('./img',$imgUrl);
                    $Base = DB::table('user');
                    $Base ->insert([
                        'name' => $_POST['name'],
                        'password' => $_POST['password'],
                        'img' =>    $imgUrl
                    ]);
                    echo '文件符合要求<h1><a href="/file">点击返回</a></h1>';

                }else{
                    echo '文件不符合要求<h1><a href="/file">点击返回</a></h1>';
                }
            }else{
                echo '上传失败<h1><a href="/file">点击返回</a></h1>';
                 echo $request -> file('filedata')->getErrorMessage();
            }
        }else{
            return view('test/file_form');
        }
    }

    //分页效果
    public function paging(){
        $data = DB::table('user')->paginate(3); //分页使用的每次展示条数据
        // dd($data);
        return view('/test/paging',compact('data'));

    }
    public function boot(){

        if(Input::method() == "POST"){
            dd($_POST);
            echo '<h1>验证成功</h1><a href="/bootstrap">点击返回</a>';
        }else{
            return view('/test/bootstrap');
        }

    }
    public function zzk(){
        return view('/test/zz');
    }

}
