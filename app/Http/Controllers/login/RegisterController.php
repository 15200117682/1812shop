<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
	/**
	* 注册视图页面
	* @author dongxin
	* @Date   2019-09-19
	* @email  1261335491@qq.com
	* @return [type]            [description]
	*/
    public function register()
    {
    	return view('login/register');
    }

    public function register_do()
    {
    	$u_name = request('u_name');
    	$u_email = request('u_email');
    	$u_pwd = request('u_pwd');
        $status = 1;
        
    }
}
