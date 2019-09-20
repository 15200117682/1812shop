<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UsersModel;

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
    /**
     * 注册执行入库
     * @author dongxin
     * @Date   2019-09-20
     * @email  1261335491@qq.com
     * @return [type]            [description]
     */
    public function register_do()
    {
        // 接值
    	$u_name = request('u_name');
    	$u_email = request('u_email');
    	$u_pwd = request('u_pwd');
        // 验证用户名邮箱唯一
        $name_only = UsersModel::where('u_name',$u_name)->first();
        $email_only = UsersModel::where('u_email',$u_email)->first();
        if(!empty($name_only)){
            echo "<script>alert('该用户名已被注册');history.go(-1)</script>";die;
        }
        if(!empty($email_only)){
            echo "<script>alert('该邮箱已被注册');history.go(-1)</script>";die;
        }
        // 入库
        $res = UsersModel::create([
            'u_name' => $u_name,
            'u_email' => $u_email,
            'u_pwd' => md5($u_pwd),
            'status' => 2,
            'u_time' => time(),
        ]);
        if(empty($res)){
            echo "<script>alert('系统错误,请稍后重试');history.go(-1)</script>";die;
        }else{
            echo "<script>alert('注册成功');location.href='login'</script>";die;
        }
    }
}
