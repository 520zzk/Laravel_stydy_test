<?php

namespace App\Http\Controllers\model;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\userModel;

class mdController extends Controller
{
    //
	function md(){
		// $user = new userModel;
        // $user = userModel::all();
        // $user=userModel::where('name','=','admin')->update(['name'=>'123456','pwd'=>'123456']);
        $user=userModel::whereRaw('name = "aaa"')->update(['name'=>'123456','pwd'=>'123456']);
		dd($user);
	}
}
