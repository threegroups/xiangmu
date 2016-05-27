<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//设置input接值方式
use Illuminate\Support\Facades\Input;
use DB;

class OrderController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //展示用户登录页面

    public function order_list()
    {
        return view('order/order_list');
    }



//添加订单数据
    public function order_show(){
        //接受值
        $arr = Input::all();
        //var_dump($arr);die;
        //echo $arr['r_phone'];die;
        //var_dump($arr);die;
        $flag=DB::table('renter')->insertGetID(array('r_start_time'=>$arr['r_start_time'],'r_receive_time'=>$arr['r_receive_time'],'r_name'=>$arr['r_name'],'r_phone'=>$arr['r_phone'],'r_idcart'=>$arr['r_idcart'],'r_real_name'=>$arr['r_real_name']));
        //var_dump($flag);die;
        if($flag){
            //echo "成功";die;
            return view('order/order_show');
        }else{
            echo "失败";
        }
    }
}

?>