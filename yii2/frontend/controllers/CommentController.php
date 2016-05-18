<?php

namespace frontend\controllers;
use yii\data\Pagination;
use frontend\models\Clip;

class CommentController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	/*留言列表*/
    public function actionComment_list()
    {
    	/*$session = \Yii::$app->session;
		$session->open();	
		$name=$session->get('name');*/
		$query = Clip::find();
		$countQuery = clone $query;
		$pages = new Pagination([
			'totalCount' => $countQuery->count(),
			'pageSize' => 5,
		]);
		$totalCount=$pages->totalCount;
		//echo $totalCount;die;
		//print_r($pages);die;
		$models = $query->offset($pages->offset)
			->limit($pages->limit)
			->all();
		
		return $this->render('feedback-list.html', [
			 'arr' => $models,
			 'pages' => $pages,
			 'totalCount' => $totalCount,
		]);
       
    }

}
