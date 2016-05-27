<?php
namespace frontend\controllers;
use yii;
use yii\web\Controller;
use frontend\models\Admin;
use yii\web\UploadedFile;

/**
 * Class LoginController
 * @package frontend\controllers
 */
class LoginController extends \yii\web\Controller
{
    public $enableCsrfValidation=false;
    public $layout =false;
    public function actionIndex()
    {
        return $this->render('login');
    }
    //验证登陆
    public function actionLogin(){
        //接收表单值
        $u_name=Yii::$app->request->post("u_name");
        $u_pwd=Yii::$app->request->post("u_pwd");
        @$online=Yii::$app->request->post("online");
        $arr=\Yii::$app->db->createCommand("select * from l_user where u_name='$u_name'")->queryAll();
        $session = \Yii::$app->session;
        $session->open();
        if(!empty($arr)){
            if($arr[0]['u_pwd']==$u_pwd){
                    if(!empty($online)){
                        $session->set('u_name', $u_name);
                        $session->set('u_pwd', $u_pwd);
                    }else{
                        $session->set('u_name', $u_name);
                        $session->remove('u_pwd', $u_pwd);
                    }
                    return $this->redirect(['login/indexes']);
            }else{
                echo "<script>alert('请重新输入您的密码');location.href='index.php?r=login/index'</script>";
            }
        }else{
            echo "<script>alert('请重新输入您的用户名');location.href='index.php?r=login/index'</script>";
        }
    }
    //进入主页面
    public function actionIndexes(){
        return $this->render('index');
    }
    //退出
    public function actionExit(){
        $session = \Yii::$app->session;
        unset($session['language']);
        return $this->render('login');
    }
    //个人信息
    public function actionMember_show(){
        $session = \Yii::$app->session;
        $u_name=$session->get('u_name');
        $db=\Yii::$app->db;
        $arr=$db->createCommand("select * from l_user where u_name='$u_name'")->queryAll();
        return $this->render('member-show',
            ['arr'=>$arr]
        );
    }
    //会员添加
    public function actionMember_add(){
        $model=new Admin();
        return $this->render('member-add',['model'=>$model]);
    }
    public function actionMember_adds(){
        $posts=\Yii::$app->request->post();
        $model = new Admin();

        if (\Yii::$app->request->isPost){
           $model->a_img = UploadedFile::getInstance($model, 'a_img');
           $a_img=$model['a_img']->name;
            $a_time=date('Y-m-d H:i:s',time());
            if ($model->upload()){
                $connection = \Yii::$app->db;
                $connection->createCommand()->insert('admin', [
                    'a_name' =>$posts['a_name'],
                    'a_pwd' =>$posts['a_pwd'],
                    'a_email' =>$posts['a_email'],
                    'a_phone' =>$posts['a_phone'],
                    'a_time' =>$a_time,
                    'a_place' =>$posts['a_place'],
                    'a_sex' =>$posts['a_sex'],
                    'a_img' =>$a_img,
                ])->execute();
                echo "<script>alert('添加成功');location.href='index.php?r=login/member_list'</script>";
                // 文件上传成功
                return;
            }
        }
        return $this->render('upload', ['model' => $model]);
    }
    //会员列表
    public function actionMember_list(){
        $db=\Yii::$app->db;
        $connection = \Yii::$app->db;
        $counts=$connection->createCommand("select count(*) from admin where a_del=0")->queryAll();
        $count=$counts[0]['count(*)'];
        $session = \Yii::$app->session;
        $session->set('count',$count);
        //每页显示条数
        $num=3;
        //取出合法的当前页
        $page=isset($_GET['page'])?$_GET['page']:1;
        //计算总页数
        $pagecount=ceil($count/$num);
        //计算偏移量
        $start=($page-1)*$num;
        //上一页
        $uppage=$page-1<1?1:$page-1;
        //下一页
        $downpage=$page+1>$pagecount?$pagecount:$page+1;
        $str="<a href='index.php?r=login/member_list&page=1'><input type='button' value='首页' class='ui_input_btn01'/></a>";
        $str.="&nbsp;&nbsp;<a href='index.php?r=login/member_list&page=$uppage'><input type='button' value='上一页' class='ui_input_btn01'/></a>";
        $str.="&nbsp;&nbsp;<a href='index.php?r=login/member_list&page=$downpage'><input type='button' value='下一页' class='ui_input_btn01'/></a>";
        $str.="&nbsp;&nbsp;<a href='index.php?r=login/member_list&page=$pagecount'><input type='button' value='尾页' class='ui_input_btn01'/></a>";
        //var_dump($str);die;
        $arr=$db->createCommand("select * from admin where a_del=0 limit $start,$num")->queryAll();
        return $this->render('member-list',['arr'=>$arr,'str'=>$str]);
    }
    //放到回收站
    public function actionDel_member(){
        $a_id=$_POST['a_id'];
        $connection = \Yii::$app->db;
        $upd=$connection->createCommand()->update('admin', ['a_del' => 1], "a_id='$a_id'")->execute();
        if($upd){
            echo 1;
        }else{
            echo 0;
        }
    }
    //回收站页面
    public function actionMember_del(){
        $db=\Yii::$app->db;
        $arr=$db->createCommand("select * from admin where a_del=1")->queryAll();
        return $this->render('member-del',['arr'=>$arr]);
    }
    //回收站还原
    public function actionMember_huanyuan(){
        $a_id=$_POST['a_id'];
        $connection = \Yii::$app->db;
        $upd=$connection->createCommand()->update('admin', ['a_del' => 0], "a_id='$a_id'")->execute();
        if($upd){
            echo 1;
        }else{
            echo 0;
        }
    }
    //回收站删除
    public function actionDel_member2(){
        $a_id=$_POST['a_id'];
        $connection = \Yii::$app->db;
        $del=$connection->createCommand()->delete('admin',"a_id='$a_id'")->execute();
        if($del){
            echo 1;
        }else{
            echo 0;
        }
    }
    //会员停用
    public function actionMember_stop(){
        $a_id=$_POST['a_id'];
        $connection = \Yii::$app->db;
        $upd=$connection->createCommand()->update('admin', ['a_state' => 1], "a_id='$a_id'")->execute();
        if($upd){
            echo 1;
        }else{
            echo 0;
        }
    }
    //会员启用
    public function actionMember_stop2(){
        $a_id=$_POST['a_id'];
        $connection = \Yii::$app->db;
        $upd=$connection->createCommand()->update('admin', ['a_state' => 0], "a_id='$a_id'")->execute();
        if($upd){
            echo 1;
        }else{
            echo 0;
        }
    }
}
