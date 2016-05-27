<?php

namespace frontend\controllers;

class ListController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
	public $layout =false ;
    public function actionMember_list()
    {
        return $this->render('member-list');
    }
    
	//查询数据用列表显示出来
    public function actionLists()
    {
	//查询数据条数
	$connection = \Yii::$app->db;

	//查询数据
	//$command=$connection->createCommand("select count(*) as from l_user")->queryAll();
	$command=$connection->createCommand("select * from admin");
//	var_dump($command);die;

	$arr = $command->queryAll();
	//var_dump($arr);die;

    return $this->render('member-list',['arr'=>$arr]);

/*
	$count=$arr[0]['count'];

	//每页显示条数
	$num=5;

	$page=isset($_GET['page'])?$_GET['page']:1;

	//共多少页
	$pagecount=ceil($count/$num);

	$limit=($page-1)*$num;

	//上一页
	$uppage=$page-1<1?1:$page-1;

	//下一页
	$downpage=$page+1>$pagecount?$pagecount:$page+1;
	$str="<a href='index.php?r=advertisement/list&page=1'><input type='button' value='首页' class='ui_input_btn01'/></a>";
	$str.="<a href='index.php?r=advertisement/list&page=$uppage'><input type='button' value='上一页' class='ui_input_btn01'/></a>";
	$str.="<a href='index.php?r=advertisement/list&page=$downpage'><input type='button' value='下一页' class='ui_input_btn01'/></a>";
	$str.="<a href='index.php?r=advertisement/list&page=$pagecount'><input type='button' value='尾页' class='ui_input_btn01'/></a>";

	$command = $connection->createCommand("select * from advert limit $limit,$num");

	$posts = $command->queryAll();

	return $this->renderPartial('member_list',['arr'=>$posts,'str'=>$str]);
*/
    }

}
