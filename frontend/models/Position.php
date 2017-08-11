<?php 
		namespace frontend\models;
		use yii\db\ActiveRecord;

	class Position extends ActiveRecord{

		function rules(){
			return [
			[['position_name','position_desc'],'required'],
			];
		}
	}
	
	

 ?>