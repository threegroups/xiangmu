<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//调用分页
use Illuminate\Pagination\Paginator;
//设置input接值方式
use Illuminate\Support\Facades\Input;
use DB;
class DetailController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //展示用户登录页面
    public function detail_list(){
        //接收城市名称
        //session_start();
        @$city=Input::get('city');
        //echo $city;die;
       // $_SESSION['city'] = $city;
        //echo $_SESSION['city'];die;
        //使用查询构建器进行简单分页，每页显示$perPage条记录->where('u_city',"$city")
        $posts = DB::table('landlord')->join("l_user","landlord.u_id","=","l_user.u_id")->where("landlord.is_lock","=","1")->paginate($perPage = 3, $columns = ['*'], $pageName = 'page', $page = null);

        //$posts['0']->room_pic;
        for($i=0;$i<count($posts);$i++){
            $picture[$i]=Explode('|',$posts[$i]->room_pic);
        }
        foreach($posts as $key=>$val){
            $id=$posts[$key]->l_id;
            $count[$key] = DB::table('clip')->where("l_id","=","$id")->count();
        }

        return view('detail/DetailList',['results'=>$posts,'picture'=>$picture,'count'=>$count]);
    }
    public function detail_show(){
        $id=$_GET['id'];
        //echo $id;die;
        $users = DB::table("landlord")->where('l_id',$id)->get();
        $set = DB::table("clip")->where('c_id',$id)->get();
        for($i=0;$i<count($users);$i++){
            $picture[$i]=Explode('|',$users[$i]->room_pic);
        }
//        print_r($picture);die;
        return view('detail/detail_show',['users'=>$users ,'set'=>$set,'picture'=>$picture]);
        }
    public function Collect()
    {
        session_start();
        if(empty($_SESSION['u_id'])){
            echo '<script>alert("请先登录");location.href="login"</script>';die;
        }
        $id = Input::get('id');

        $u_id = $_SESSION['u_id'];
        //echo $u_id;
        //echo $id;die;
        $collect = DB::table('collect')->where('u_id', $u_id)->first();
        if ($collect) {
            echo "<script>alert('您已收藏！');history.go(-1);</script>";
        } else {
            $command = DB::table('collect')->insert(
                array('l_id' => $id, 'u_id' => $u_id)
            );
            if ($command) {
                echo "<script>alert('收藏成功');history.go(-1);</script>";
            } else {
                echo "<script>alert('收藏失败');history.go(-1);</script>";
            }
        }
    }



    }