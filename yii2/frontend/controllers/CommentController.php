<?php

namespace frontend\controllers;
use yii\data\Pagination;
use frontend\models\Clip;

class CommentController extends \yii\web\Controller
{
    public $layout =false ;
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
<<<<<<< HEAD
		->orderBy([
			    'c_id' => SORT_ASC,
			])
=======
>>>>>>> f549ce10ff9a363ddb1fa2aa6f86a85767571cd9
			->limit($pages->limit)
			->all();
		
		return $this->render('feedback-list.html', [
			 'arr' => $models,
			 'pages' => $pages,
			 'totalCount' => $totalCount,
		]);
       
    }

<<<<<<< HEAD
    /*删除单条*/
	public function actionDel()
	{
		$id=$_GET['id'];
		$cid=$_GET['cid'];
		$command = \Yii::$app->db->createCommand()->delete('clip', "c_id = $id")->execute();
		if($command){
			$command = \Yii::$app->db->createCommand("SELECT * FROM clip WHERE c_id>$cid limit 1");
			$post = $command->queryOne();
			//foreach ($post as $value) {
				$str="<tr class='text-c' id=".$post['c_id'].">
					<td><input type='checkbox' name='x[]' id='playList' class='xuan' value=".$post['c_id']."></td>
					<td>".$post['c_id']."</td>
					<td>".$post['name']."</td>
					<td class='text-l'>
						".$post['content']."
					</td>
					<td>
						".$post['username']."
					</td>
					<td class='td-manage'>
						<a title='删除' href='javascript:;' onclick='member_del(this,".$post['c_id'].")' class='ml-5' style='text-decoration:none'><i class='Hui-iconfont'>&#xe6e2;</i></a>
					</td>
				</tr>";
			//}
			echo $str;
			//print_r($post);
			//cho 1;
		}else{
			echo '';
		}
	}
	/*批量删除*/
    public function actionSeldel()
    {
    	$id=$_GET['id'];
    	$cid=$_GET['cid'];
    	$length=count(explode(',', $id));

		$command = \Yii::$app->db->createCommand()->delete('clip', "c_id in($id)")->execute();
		if($command){
			$comm = \Yii::$app->db->createCommand("SELECT * FROM clip WHERE c_id>$cid limit $length");
			$posts = $comm->queryAll();
			//print_r($posts);
			$str='';
			foreach ($posts as $key=>$value) {
				
				$str.="<tr class='text-c' id=".$value['c_id'].">
					<td><input type='checkbox' name='x[]' id='playList' class='xuan' value=".$value['c_id']."></td>
					<td>".$value['c_id']."</td>
					<td>".$value['name']."</td>
					<td class='text-l'>
						".$value['content']."
					</td>
					<td>
						".$value['username']."
					</td>
					<td class='td-manage'>
						<a title='删除' href='javascript:;' onclick='member_del(this,".$value['c_id'].")' class='ml-5' style='text-decoration:none'><i class='Hui-iconfont'>&#xe6e2;</i></a>
					</td>
				</tr>";
			}
			echo $str;
			//echo '删除成功';
			//echo "<script>alert('删除成功');location.href='index.php?r=from/clip_list'</script>";

			//return $this->redirect(['/from/clip_list']);
		}else{
			echo "";
		}
    }

=======
>>>>>>> f549ce10ff9a363ddb1fa2aa6f86a85767571cd9
}
