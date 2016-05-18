<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Index;
use yii\web\UploadedFile;
//$this->layout = false;
class IndexController extends Controller{
    public $enableCsrfValidation = false;
    public $layout =false ;
    public function actionLogin()
    {
        return $this->render('login.html');
    }
    public function actionIndex()
    {
        return $this->render('index.html');
    }
    public function actionWelcome()
    {
        return $this->render('welcome.html');
    }
    public function actionProduct_brand()
    {
        return $this->render('product-brand.html');
    }
    public function actionProduct_category()
    {
        return $this->render('product-category.html');
    }
    public function actionProduct_list()
    {
        return $this->render('product-list.html');
    }
    /*public function actionFeedback_list()
    {
        return $this->render('feedback-list.html');
    }*/
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


