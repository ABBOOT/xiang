<?php 
	
	 namespace frontend\controllers;
	 //yii�������Ŀ�����
	 use yii\web\Controller;
	 //ʹ��models����ķ���
	 use frontend\models\Country;

	 class DemoController extends Controller{
	 	public function actionIndex(){
	 		$country = new Country();
	 		//��ѯ������¼
	 		//$country->find()->asArray()->one();
	 		// ʵ����Ӳ���
	 		/*	$country -> name = 'dddd';
		 		$country -> code = 'OO';
		 		$country -> population = '1111';
		 		$country -> save();	*/
		 	//ʵ���޸Ĳ���
		 	//�޸�
		 	// $result = $country -> find()->one();
        	 
		 	// $result -> name = 'qqqqq';

		 	// $result -> save();
		 	// �����޸�
		 	//$country -> updateAll(['name'=>'QQA'],'code="BR"');
		 	//$country -> deleteAll('code = :code' , [':code'=>'BR']);
		 	$result = $country->findOne('CA');
		 	var_dump($result);
	 		//var_dump($result);
	 	}
	 }
	





 ?>