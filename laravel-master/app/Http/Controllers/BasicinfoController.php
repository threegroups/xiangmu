<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use DB;
class BasicinfoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests ;
    public function basicinfoone(){
		session_start();
        //@在PHP中叫错误抑制符，也就是用来屏蔽错误的。
        @$u_linkman=$_SESSION['name'];
		if(empty($u_linkman)){
			echo "<script>alert('请您先登录');</script>";
            return redirect('login');
        }
        //查询房屋类型
        $housetype = DB::table('house_type')->get();
        //查询户型
        $type = DB::table('type')->get();
        //查询床型
        $bed = DB::table('bed')->get();
        //查询床数
        $bed_num = DB::table('bed_num')->get();
        //查询配套设施
        $support = DB::table('support')->get();
        //查看地区
        $arr = DB::select('select * from region where parent_id=0');
        return view('basicinfo/basicinfoone',compact('housetype','type','bed','bed_num','support','arr'));
    }
    //收货地址
    public function edit_address(){
        $id=Input::get('id');
        $arr = DB::select("select * from region where parent_id=$id");
        echo json_encode($arr);
    }
    //第二步
    public function basicinfotwo(){
        $t_hall=Input::get('t_hall');
        $t_kic=Input::get('t_kic');
        $t_ter=Input::get('t_ter');
        $t_room=Input::get('t_room');
        $t_id=$t_room."室".$t_hall."厅".$t_kic."厨".$t_ter."卫";
        //echo $t_id;die;
        $data=Input::all();
        session_start();
        $u_linkman=$_SESSION['name'];
        $arr= DB ::select("select * from l_user where u_name='$u_linkman'");
        $u_id=$arr[0]->u_id;
        $country=Input::get('country');
        //省份
        $provice=Input::get('provice');
        $arr = DB::select("select * from region where region_id=$provice");
        @$provices=$arr[0]->region_name;
        //城市
        $city=Input::get('city');
        $arr = DB::select("select * from region where region_id=$city");
        @$citys=$arr[0]->region_name;
        //市
        $shi=Input::get('shi');
        $arr = DB::select("select * from region where region_id=$shi");
        @$shis=$arr[0]->region_name;
        $u_city=$country.$citys."省".$provices."市".$shis;

        //添加数据库
        @$s=Input::get('s_id');
        @$s_id=implode(',',$s);

        //添加数据库
        $flag = DB::table('landlord')->insertGetId(
            array('u_id' =>$u_id,'u_city' =>$u_city,'u_linkman'=>$u_linkman,'room_area'=>$data['room_area'],'t_id'=>$t_id,'room_toilet'=>$data['t_toilet'],'h_id' =>$data['h_id'],'toiler_num'=>$data['t_toilet'],'bed_num' =>$data['bed_num'],'is_meal' =>$data['is_meal'],'s_id' =>$s_id)
        );
        if($flag){
            echo "成功";
        }else{
            echo "失败";
        }
        return view('basicinfo/basicinfotwo');
    }
    //第三步
    public function basicinfothree(){
        $l_id = DB::select("select * from landlord order by l_id desc limit 1");
        //获取ID
        $l_id=$l_id[0]->l_id;
        $data=Input::all();

        //添加数据库
        $flag = DB::table('landlord')
            ->where('l_id',$l_id)
            ->update(array('room_title' =>$data['room_title'],'room_into_desc'=>$data['room_into_desc'],'room_position'=>$data['room_position'],'room_rim'=>$data['room_rim'],'send_words'=>$data['send_words'],'room_other'=>$data['room_other']));
        return view('basicinfo/basicinfothree');
    }
    //第四步
    public function basicinfofour(){
        $data=Input::all();
        $room_pic='';
        if(count($data['myfile'])<2){
            echo "<script>alert('最少上传2张照片');</script>";
            return view('basicinfo/basicinfo_three');
        }else{
            for($i=0; $i<count($data['myfile']); $i++)
            {
                $tmpFilePath = $data['myfile'][$i];
                $tmpName= $tmpFilePath->getClientOriginalName();
                $tmpFilePath->move('public/images',$tmpName);
                $room_pic.=$tmpName.'|';
            }
            $room_picture=substr($room_pic,1);
            $l_id = DB::select("select * from landlord  order by l_id desc limit 1");
            //获取刚刚添加的ID
            $l_id=$l_id[0]->l_id;
            $flag = DB::table('landlord')
                ->where('l_id',$l_id)
                ->update(array('room_pic' =>$room_picture));
            return view('basicinfo/basicinfofour');
        }
    }
    //第五步
    public function basicinfofive(){
        $data=Input::all();

        $l_id = DB::select("select * from landlord  order by l_id desc limit 1");
        //获取刚刚添加的ID
        $l_id=$l_id[0]->l_id;
        $flag = DB::table('landlord')
            ->where('l_id',$l_id)
            ->update(array('room_date_price' =>$data['room_date_price'],'room_week_price'=>$data['room_week_price'],'room_deposit' =>$data['room_deposit'],'is_bed' =>$data['is_bed'],'is_meal' =>$data['is_bed'],'is_clean_money' =>$data['is_clean_money'],'electric_charge' =>$data['electric_charge'],'other_charge' =>$data['other_charge'],'transaction_rule' =>$data['transaction_rule'],'start_time' =>$data['start_time'],'end_time' =>$data['end_time'],'receive_time' =>$data['receive_time'],'least_date' =>$data['least_date'],'most_date' =>$data['most_date'],'is_receive_visitor' =>$data['is_receive_visitor'],'is_bill' =>$data['is_bill'],));

        return view('basicinfo/basicinfofive');
    }
    //最后一步，成功
    public function basicinfosix(){
        $data=Input::all();

        $l_id = DB::select("select * from landlord  order by l_id desc limit 1");
        //获取刚刚添加的ID
        $l_id=$l_id[0]->l_id;
        $flag = DB::table('landlord')
            ->where('l_id',$l_id)
            ->update(array('store_name' =>$data['store_name'],'room_desc'=>$data['introduce'],'u_qq' =>$data['mobile'],'u_alipay'=>$data['paperno']));

        return view('basicinfo/basicinfosix');
    }
    //手机验证码
    public function fun_code(){
        $phone=$_POST['phone'];
        $code=rand(1000,9999);
        define('SESSION_LIFE',18000);
        session_set_cookie_params(SESSION_LIFE);
        session_start();
        $_SESSION['code'] = $code;
        //调用接口发短信功能
        $url="http://api.k780.com:88/?app=sms.send&tempid=50532&param=code%3d{$code}&phone={$phone}&appkey=18422&sign=1188e4ae43a26adfc539df4508bc80d9&format=json";
        $str=file_get_contents($url);
        // dd($str);die;
        if($str){
            echo 1;
        }else{
            echo 0;
        }
    }
}
