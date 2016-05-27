<?php

namespace frontend\controllers;
use PhpParser\Node\Expr\BinaryOp\LogicalAnd;
use Yii;
use yii\web\Controller;
use frontend\models\Index;
use yii\web\UploadedFile;
use \yii\data\Pagination;
use yii\captcha\CaptchaAction;
use \yii\captcha\Captcha;
class ProdectController extends \yii\web\Controller
{
    //房源信息
    public $layout =false ;
    public function actionProduct_brand()
    {
        $connection = \Yii::$app->db;
        $sql="select * from l_user inner join landlord on l_user.u_id=landlord.u_id";
        $command = $connection->createCommand($sql);
        $arr = $command->queryAll();
        //$query = Message::find();
        /* $countQuery = clone $query;
         $pages = new Pagination([
             'totalCount' => $countQuery->count(),
             'pageSize' => 3,
         ]);
         $models = $query->offset($pages->offset)
             ->limit($pages->limit)
             ->all();

         return $this->render('message_list', [
             'show' => $models,
             'pages' => $pages,
         ]);*/
        //查询数据库
        return $this->render('product-brand.html',array('arr'=>$arr));
    }
    //房源管理中的删除
    public function actionLandlord_del(){
        //接受表单提交的id
        $id=$_POST['id'];
        $connection = \Yii::$app->db;
        $re = $connection->createCommand("delete from landlord where l_id=$id")->execute();
        if($re){
            echo 1;
        }else{
            echo 0;
        }

    }
    //房源管理中的状态修改
    public function  actionLandlord_lock(){
        //接受表单提交的id
        $id=$_POST['id'];
        //echo $id;die;
        $connection = \Yii::$app->db;
        $re = $connection->createCommand("update landlord set is_lock=0 where l_id=$id")->execute();
        if($re){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function  actionLandlord_lock2(){
        //接受表单提交的id
        $id=$_POST['id'];
        //echo $id;die;
        $connection = \Yii::$app->db;
        $re = $connection->createCommand("update landlord set is_lock=1 where l_id=$id")->execute();
        if($re){
            echo 1;
        }else{
            echo 0;
        }
    }
}
