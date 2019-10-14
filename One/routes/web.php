<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/luyou',function(){
    echo '这个是没有控制器的路由';
});
//控制器路由,没有分目录的
Route::get('zzk/text','zzkController@text');
Route::get('zzk/input','zzkController@InputContent');
//分目录下控制器路由
/*
    /目录/控制器/方法  比较语义化
*/
Route::get('/home/index/text',"Home\IndexController@text");

//控制器中的数据表操作
Route::group(['prefix' => 'home/index'],function(){
    Route::get('/add',"Home\IndexController@add");
    Route::get('/updata',"Home\IndexController@updata");
    Route::get('/select',"Home\IndexController@select");
    Route::get('/show',"Home\IndexController@show");
    Route::get('/fh',"Home\IndexController@fh");    //foreach 循环视图
    Route::get('/news','Home\IndexController@news');    //yield 与 section
});

Route::group(['prefix' => 'test/test'],function(){
    Route::get('/csrf',"test\TestController@csrf"); //控制器驼峰大小写 [必须]
    Route::post('/csrfdata',"test\TestController@csrf_data") ->name('csrfData');
});

//自动验证
Route::any('/validate',"test\TestController@from");

//提交文件
Route::any('/file','test\TestController@file_form');

//分页效果
Route::get('/paging','test\TestController@paging');

//试验BootStrap 应用效果
Route::any('/bootstrap',"test\TestController@boot");

//验证文件选择
Route::get('/zzk',"test\TestController@zzk");


//登陆验证
Route::view('admin/login','admin/login');
Route::post('admin/addUser',"admin\AdminController@addUser");
Route::post('admin/onlogin',"admin\AdminController@onlogin");


Route::any('/md',"model\mdController@md");