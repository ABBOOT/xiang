<?php  

	namespace backend\controllers;

	use yii\web\Controller;
	use backend\models\Caji;
	use backend\models\Category;

	class CajiController extends Controller{
		public function actionIndex(){
			 return $this -> render('index');
		}
		public function actionTwo(){
			 $content = file_get_contents('http://baidu.lecai.com/lottery/draw/list/5');

			 $prev = "#<tbody>(.*)</tbody>#sU";

			 $res = preg_match($prev, $content,$result);
			 /*<tr>.*>(.*)</a></td>.*>(.*)</td>.*>
                    <td class=".*">(.*)</td>.*>(.*)</td>.*>*/
			 $c_prev = '#<tr.*>(.*)</a></td>.*>(.*)</td>.*>(.*)</td>.*>(.*)</td>.*>#sU';
            $ress = preg_match_all($c_prev, $result[1] , $aaa);
            $Cate = new Category();

           $Cate_str = $Cate ->find() -> where('cat_id = 1') -> one();
       	   $connection = \Yii::$app->db;
       	   $rand = rand(1,9);
           foreach($aaa[2] as $k=>$v){
           		 
           			$connection -> createCommand()->batchInsert('caji' , 
			 		['cat_id','qihao','add_time','number'],[
			 		[$Cate_str -> cat_id,date('Ym'.$rand),$v,$aaa[3][$k]],
			 		])->execute();
           		 
           }
		}
		public function actionThree(){
			 $content = file_get_contents('http://baidu.lecai.com/lottery/draw/list/3');

			 $prev = "#<tbody>(.*)</tbody>#sU";

			 $res = preg_match($prev, $content,$result);
			 
			$c_prev = '#<tr>
        <td><.*>(.*)</a></td.*>(.*)</td>.*>.*>.*>(.*)</td>.*>(.*)</td>.*>#sU';
            $ress = preg_match_all($c_prev, $result[1] , $aaa);
     
            $Cate = new Category();

           $Cate_str = $Cate ->find() -> where('cat_id = 1') -> one();
       	   $connection = \Yii::$app->db;
           foreach($aaa[1] as $k=>$v){
           		 
           			$connection -> createCommand()->batchInsert('caji' , 
			 		['cat_id','qihao','add_time','number'],[
			 		[$Cate_str -> cat_id,$v,$aaa[2][$k],$aaa[3][$k]],
			 		])->execute();
           		 
           }
           

		}
		public function actionFive(){
	       	 $content = file_get_contents('http://baidu.lecai.com/lottery/draw/list/3');

			 $prev = "#<tbody>(.*)</tbody>#sU";

			 $res = preg_match($prev, $content,$result);
			 
			 $c_prev = '# <tr class=".*">.*>(.*)</td>.*>.*>(.*)</a>.*>.*<td class=".*".*span class=".*">(.*)</span></td>.*>.*</td.*>#sU';
             $ress = preg_match_all($c_prev, $result[1] , $aaa);
     
             $Cate = new Category();

	           $Cate_str = $Cate ->find() -> where('cat_id = 1') -> one();
	       	   $connection = \Yii::$app->db;
	           foreach($aaa[1] as $k=>$v){
	           		 
	           			$connection -> createCommand()->batchInsert('caji' , 
				 		['cat_id','qihao','add_time','number'],[
				 		[$Cate_str -> cat_id,$v,$aaa[2][$k],$aaa[3][$k]],
				 		])->execute();
	           		 
	           }
		 

		}
	}


?>