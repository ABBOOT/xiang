<?php 
	
	namespace frontend\controllers;

	use yii\web\Controller;
	use yii\data\Pagination;
	use frontend\models\Position;
	class MyuploadController extends Controller{

		public function actionIndex(){
			  $model = new Position;

			  $count = $model ->find()->count();

			  
			  $page = new Pagination([
			  	'defaultPageSize' => 5,
			  	'totalCount'	=> $count,
			  	]);
			  
			 $result = $model -> find() -> orderBy('id')
			 			-> offset($page -> offset)
			 			-> limit($page -> limit)
			 			-> all();
			 
			return $this -> render('index',[
			 		'page' => $page,
			 		'result' => $result,
			 	]);

		}

	}
	








 ?>