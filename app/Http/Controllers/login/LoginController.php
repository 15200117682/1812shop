<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UsersModel;

class LoginController extends Controller
{
	/**
	 * 登录视图页面
	 * @author dongxin
	 * @Date   2019-09-20
	 * @email  1261335491@qq.com
	 * @return [type]            [description]
	 */
    public function login()
    {
    	return view('login/login');
    }
    /**
     * 登录验证
     * @author dongxin
     * @Date   2019-09-20
     * @email  1261335491@qq.com
     * @return [type]            [description]
     */
    public function login_do()
    {
    	$userOrEmail = request('userOrEmail');
    	$u_pwd = request('u_pwd');
    	$res1 = UsersModel::where('u_name',$userOrEmail)->where('u_pwd',md5($u_pwd))->first();
    	$res2 = UsersModel::where('u_email',$userOrEmail)->where('u_pwd',md5($u_pwd))->first();
    	if($res1||$res2){
    		if($res1){
    			session(['u_id' => $res1->u_id,'u_name'=> $res1->u_name]);
    			session()->save();
    		}elseif($res2){
    			session(['u_id' => $res2->u_id,'u_name'=> $res2->u_name]);
    			session()->save();
    		}
    		echo "<script>alert('登录成功');location.href='/'</script>";die;
    	}else{
    		echo "<script>alert('账号或密码错误');location.href='login'</script>";die;
    	}
    }
    /**
     * 退出登录
     * @author dongxin
     * @Date   2019-09-20
     * @email  1261335491@qq.com
     * @param  Request           $request [description]
     * @return [type]                     [description]
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
    	return "<script>alert('拜拜');location.href='login'</script>";
    }
}
