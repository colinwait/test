<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Request;
use Illuminate\Support\Facades\Validator;

class TextController extends Controller {
	public function create()
	{
//		$rq=Request::all();
//
//
//		$val=Validator::make($rq,[
//			'uname'=>'required|between:6,32|unique:users',
//			'pwd'=>'required|between:6,32',
//		]);
//		if($val->fails()){
//			return $val->errors();
//		}else{
//
//			echo  "验证成功";
//			dd($rq);
//		}
		$pwd=Request::get('pwd');
		$hashedpwd=Hash::make($pwd);
		session(['pwd'=>$hashedpwd]);
	}

	public function check()
	{
			$hashedpwd=session('pwd');
			$pwd2=Request::get('pwd2');
			if(Hash::check($pwd2,$hashedpwd)){
				return 'yes';
			}else{
				return 'no';
			}
	}
}
