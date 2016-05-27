<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//设置input接值方式
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use DB;
class IndexController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //展示用户登录页面
    public function index(){
        return view('index/index');
    }
    public function login(){
        return view('index/login');
    }

    //页面注册
    public function register(){
        return view('index/register');
    }
    //手机短信
    function bton_click(){
        //接受手机号
        $phone=Input::get('phone');
        $code=rand(1000,9999);
        define('SESSION_LIFE',18000);
        session_set_cookie_params(SESSION_LIFE);
        session_start();
        $_SESSION['code'] = $code;
        //   echo  $code;
        //调用接口发短信功能
        // echo $code;
        $url="http://api.k780.com:88/?app=sms.send&tempid=50532&param=code%3d{$code}&phone={$phone}&appkey=18422&sign=1188e4ae43a26adfc539df4508bc80d9&format=json";
        $str=file_get_contents($url);
        // dd($str);die;
        if($str){
            echo 1;
        }else{
            echo 0;
        }
    }
    //添加新用户
    public function add_users(){
        //接受表单提交的值
        $name=Input::get('u_name');
        $phone=Input::get('Mobile');
        $pwd=Input::get('Password');
        //$sex=Input::get('u_sex');
        $codes=Input::get('verifycode');
        $email=Input::get('Email');
        if(!empty($email)){
            $u_sore=800;
        }else{
            $u_sore=0;
        }
        session_start();
        $code=$_SESSION['code'];
        //echo $code;
        //echo $codes;die;
        if($code==$codes){
            //将数据加入数据库
            $re = DB::table('l_user')->insertGetId(
                array(
                    'u_name' => "$name",
                    'u_pwd' => "$pwd",
                    'u_phone'=>"$phone",
                    'u_email'=>"$email",
                    // 'u_sex'=>"$sex",
                    'u_sore'=>"$u_sore",
                )
            );
            if($re){
                // define('SESSION_LIFE',18000);
                // session_set_cookie_params(SESSION_LIFE);
                // session_start();
                $_SESSION['name'] = $name;
                echo  '<script>alert("注册成功");location.href="landlord_list"</script>';
            }else{
                echo  '<script>alert("注册失败");location.href="login"</script>';
            }

        }else{
            echo  '<script>alert("手机验证码输入错误，请重新输入");location.href="register"</script>';
        }

    }

    //验证登陆
    public function yan_login(){
        //接受表单提交的值
        $name=Input::get('u_name');
        $pwd=Input::get('u_pwd');

        //查看数据库
        $user = DB::table('l_user')->where('u_name', $name)->first();
        $time=date('d');
        if(!empty($user)){
            if($user->u_name==$name){

                if($user->u_pwd==$pwd){
                    //  Session::put('name', $name);
                    //$value = Session::get('name');
                    //  echo $value;
                    define('SESSION_LIFE',18000);
                    session_set_cookie_params(SESSION_LIFE);
                    session_start();
                    $_SESSION['name'] = $name;
                    //$kk=$_SESSION['name'];
                    //  echo  $kk;
                    echo '<script>alert("登陆成功");location.href="index"</script>';
                }else{
                    echo '<script>alert("密码不正确");location.href="login"</script>';

//                        $re=DB::table('l_user')
//                            ->where('u_name', $name)
//                            ->update(array('login_time' => $time,'is_lock'=>$user->is_lock+1));
//
//                        if($user->is_lock>=2&$user->login_time==$time){
//                            echo '<script>alert("密码错误3次，今天您已没有机会");location.href="login"</script>';
//                        }elseif($user->is_lock==1&$user->login_time==$time){
//                            echo '<script>alert("密码错误2次，今天您还有1次机会");location.href="login"</script>';
//                        }else{
//                            echo '<script>alert("密码错误1次，今天您还有2次机会");location.href="login"</script>';
//                        }
                }
            }
        }else{
            echo '<script>alert("用户名不存在");location.href="index"</script>';
        }
    }
    public function landlord_list(){
        //  $id = Session::getId();
        //  var_dump($id);
        session_start();
        $name=$_SESSION['name'];
        //  echo  $name;
        return view('detail/detail_list');
    }
    //我的途家
    public function my_tujia(){
        return view('index/User_show');
    }
    //个人信息
    public function up_users(){
        //接受表单提交的值
        $nickname=Input::get('nickname');
        $realname=Input::get('realname');
        $sex=Input::get('sex');
        $email=Input::get('email');
        $phone=Input::get('mobile');
        session_start();
        $name=$_SESSION['name'];
        //修改数据库
        $re=DB::table('l_user')
            ->where('u_name', $name)
            ->update(array(
                    'nickname' =>"$nickname",
                    'real_name'=> "$realname",
                    'u_sex'=>"$sex",
                    'u_email'=>"$email",
                    'u_phone'=>"$phone")
            );
        if($re){
            echo "<script>alert('保存成功');location.href='my_tujia'</script>";
        }else{
            echo "<script>alert('保存失败');location.href='my_tujia'</script>";
        }

    }
    //修改密码
    public  function up_pwd(){
        //接受表单提交的值
        $pwd=Input::get('newpass');
        session_start();
        $name=$_SESSION['name'];
        //修改数据库
        $re=DB::table('l_user')
            ->where('u_name', $name)
            ->update(array(
                    'u_pwd' =>"$pwd",
                )
            );
        if($re){
            echo "<script>alert('保存成功');location.href='my_tujia'</script>";
        }else{
            echo "<script>alert('保存失败');location.href='my_tujia'</script>";
        }
    }
}