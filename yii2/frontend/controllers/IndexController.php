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
use frontend\models\LUser;
//$this->layout = false;
class IndexController extends Controller{
    public $enableCsrfValidation = false;
    public $layout =false ;
<<<<<<< HEAD
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'maxLength' => 5,
                'minLength' => 5
            ],
        ];
    }

    public function actionLogin()
    {
        $model=new LUser();  //edit是刚建好的模型层
        return $this->render('login.html',['model'=>$model]);
    }
    public function actionIndex()
    {
        //接受表单提交的值
        return $this->render('index.html');
    }
=======
>>>>>>> f549ce10ff9a363ddb1fa2aa6f86a85767571cd9
    public function actionWelcome()
    {
        return $this->render('welcome.html');
    }
    //房源管理
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
       // echo $id;die;
        $connection = \Yii::$app->db;
        $re = $connection->createCommand("delete from landlord where l_id in($id)")->execute();
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
    //房源管理中的查看详情
    public function actionLandlord_list(){
        //接受id
        $id=$_GET['id'];
       //查询数据库
        $connection = \Yii::$app->db;
        $sql="select * from l_user inner join landlord on l_user.u_id=landlord.u_id where l_id=$id";
        $command = $connection->createCommand($sql);
        $arr = $command->queryAll();
        //var_dump($arr);die;
        return  $this->render('product-brand-list.html',array('arr'=>$arr));
    }
    public function actionProduct_category()
    {
        return $this->render('product-category.html');
    }
    public function actionProduct_list()
    {
        return $this->render('product-list.html');
    }
    public function actionFeedback_list()
    {
        return $this->render('feedback-list.html');
    }
    public function actionMember_list()
    {
        return $this->render('member-list.html');
    }
    public function actionMember_del()
    {
        return $this->render('member-del.html');
    }
    public function actionAdmin_role()
    {
        return $this->render('admin-role.html');
    }
    public function actionAdmin_permission()
    {
        return $this->render('admin-permission.html');
    }
    public function actionAdmin_list()
    {
        return $this->render('admin-list.html');
    }

}

?>


