<?php 
	namespace frontend\controllers;

	use yii\web\Controller;
	 
	use frontend\models\Caji;

	class CaijiController extends Controller{
		public function actionIndex(){
			return $this -> render('index');
		}
		public function actionQiu(){
			  $request = \Yii::$app->request;

			  $get = $request -> get();
			 
			  $connection = \Yii::$app->db;

			 $result = $connection->createCommand('select * from caji where cat_id = '.$get['cat_id'])->queryAll();
			 
			 return $this -> render('show', array('result'=>$result));
		}
	}

 ?>
