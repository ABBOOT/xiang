<?php 
   use yii\helpers\HTML;
   use yii\widgets\ActiveForm;
   use yii\helpers\url;
   use yii\widgets\LinkPager; 
   $this -> title = '展示界面';
 
?>
		<h1><?= HTML::encode($this -> title)?></h1>
		<ul>
		<?php foreach ($result as $country): ?>
		    <li>
		        <?= Html::encode("{$country->position_name} ({$country->position_desc})") ?>:
		       	<a href="http://www.baba.com/nine/advanced/frontend/web/index.php?r=position/save&id=<?= Html::encode("{$country->id}") ?>">修改</a> || <a href="http://www.baba.com/nine/advanced/frontend/web/index.php?r=position/del&id=<?= Html::encode("{$country->id}") ?>">删除</a>
		    </li>
		<?php endforeach; ?>
		</ul>
 
 	<?= LinkPager::widget(['pagination' => $pagination]) ?>