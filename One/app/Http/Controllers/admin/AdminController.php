<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /*管理人员登陆*/
    // 注册
    public function addUser(Request $request){
        $name = $request -> get('name');
        $pwd = $request -> get('pwd');
        // dd($name,$pwd);
        $sql = " insert into user set name = ? ,pwd = ?";
       if(DB::insert($sql,[$name,$pwd])){
           // return "<script> alert('注册成功'); location.href='./login';</script>";
           // return "<script> alert('注册成功'); history.back();</script>";
           return "<h1> <a href='/admin/login'>注册成功 点击返回</a></h1>";
           // return redirect('admin/login');  //没有提示,差评
       }

    }
    //登陆验证
    public function onlogin(Request $request){
        $name = $request -> get('name');
        $pwd = $request -> get('password');
        $sql = "select id,name, pwd from user where name = ? and pwd =? ";
        $rs  = DB::select($sql,[$name,$pwd]);
        $sqlAll = "select *from user where name != ?";
       $userAll = DB::select($sqlAll,[$name]);

       if( count($rs) > 0 ){
           $temp = [
               'id' => $rs[0] ->id,
               'name' => $rs[0] ->name,
               'pwd' => $rs[0] ->pwd
           ];
           // dd($temp);
           $request -> session() ->put('userLogin',$temp);
           return view('/admin/userhome',['data' => $temp,'userAll' => $userAll]);
       }else{
           return "<script> alert('用户名和密码错误'); location.href='./login'</script>";
       }
    }
}
