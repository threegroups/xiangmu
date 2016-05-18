<?php
namespace frontend\controllers;
use yii;
class LoginController extends \yii\web\Controller
{
    public $enableCsrfValidation=false;
    public $layout =false ;
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
}
