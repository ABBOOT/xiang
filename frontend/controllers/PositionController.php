<?php 
	 namespace frontend\controllers;

	 use yii\web\Controller;
	 use frontend\models\Position;
	 use Yii;
	 use yii\helpers\url;
	 use yii\data\Pagination;
	 class PositionController extends Controller{
	 	public function actionIndex(){
 

	 		$model = new Position();

	 	 	 

	 		return $this -> render('index',array('model'=>$model));
	 	}
	 	public function actionAdd(){

 			 
			$request = Yii::$app->request;

	 		$model = new Position();

	 	 	if($request -> isPost){

	 	 		$post = $request -> post();
	 	 	     	
	 	 		if($model -> load($post) && $model -> validate()){
	 	 			$res = $model -> save();
	 	 			if($res){
	 	 				return $this -> redirect(array('position/show'));
	 	 			}
	 	 		}
	 	 	}
	 	}	
	 	public function actionShow(){
	 		$position = new Position();
	 		$count = $position -> find()->count();
	 		$pagination = new Pagination(['totalCount' => $count,'pageSize'=>5]);
			$result = $position->find()->offset($pagination->offset)
							    ->limit($pagination->limit)
							    ->all();
	 		 
	 	 	return $this -> render('show',array('result'=>$result,'pagination'=>$pagination));
	          	
	 	}
	 	public function actionSave(){
	 	   $position = new Position();

	 	   $request = Yii::$app->request;
	 	   if($request -> isGet){	
	 	  		 $get = $request->get();
	 	  		 $result = $position -> find() -> where(['id'=>$get['id']])->one();
	 	  	 
	 	  		 if($result==null){
	 	  		 	echo '错误代码提示信息10001';
	 	  		 }else{
	 	  		 	return $this -> render('save',array('result'=>$result));
	 	  		 }

	 	   }else{

           	 throw new NotFoundHttpException('The requested page does not exist.');

	 	   }
	 	  
	 	}
	 	public function actionUpdate(){
	 		$request = Yii::$app->request;
	 	    $position = new Position();

	 		   if($request -> isPost){	
	 	  		 $post = $request->post('Position');
	 	  	     $res = $position->updateAll(array('position_name'=>$post['position_name'],'position_desc'=>$post['position_desc']),array('id'=>$post['id']));
						 	  	 
	 	  	     if($res>0){
	 	  	     	$this -> redirect(array('position/show'));

	 	  	     }else{
	 	  	     	$this -> redirect(array('position/show'));
	 	  	     }

		 	   }else{

	           	 throw new NotFoundHttpException('The requested page does not exist.');

		 	   }

	 	}
	 	public function actionDel(){
	 		$request = Yii::$app->request;
	 	    $position = new Position();

	 		  if($request -> isGet){	
	 	  		 $get = $request->get('id');
				 	 	  		 
	 	  	  	 $res = $position -> deleteAll("id in ($get)");
	 	  	  	 if($res>0){
	 	  	     	$this -> redirect(array('position/show'));

	 	  	  	 }else{
	 	  	  	 	echo '代码错误提示信息10002';
	 	  	  	 }
		 	   }else{

	           	 throw new NotFoundHttpException('The requested page does not exist.');

		 	   }
	 	}

	 }


 ?>