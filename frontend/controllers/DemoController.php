<?php 
	
	 namespace frontend\controllers;
	 //yii框架下面的控制器
	 use yii\web\Controller;
	 //使用models下面的方法
	 use frontend\models\Country;

	 class DemoController extends Controller{
	 	public function actionIndex(){
	 		$country = new Country();
	 		//查询单挑记录
	 		//$country->find()->asArray()->one();
	 		// 实现添加操作
	 		/*	$country -> name = 'dddd';
		 		$country -> code = 'OO';
		 		$country -> population = '1111';
		 		$country -> save();	*/
		 	//实现修改操作
		 	//修改
		 	// $result = $country -> find()->one();
        	 
		 	// $result -> name = 'qqqqq';

		 	// $result -> save();
		 	// 批量修改
		 	//$country -> updateAll(['name'=>'QQA'],'code="BR"');
		 	//$country -> deleteAll('code = :code' , [':code'=>'BR']);
		 	$result = $country->findOne('CA');
		 	var_dump($result);
	 		//var_dump($result);
	 	}
	 }
	





 ?>