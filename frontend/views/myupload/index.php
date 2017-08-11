<?php 
	use yii\helpers\Html;
	use yii\widgets\LinkPager;
	$this -> title = '展示可以么';
 ?>

 <h1><?= Html::encode($this->title)?></h1>

<table>
	<tr>
		<td>ID</td>
		<td>公司名字</td>
	</tr>
	<?php foreach ($result as $cc): ?>
    <tr>
        <td><?= Html::encode($cc->id) ?>:</td>
        <td><?= Html::encode("{$cc->position_name}") ?> </td>
    </tr>
<?php endforeach; ?>
</table>

<?= LinkPager::widget(['pagination'=>$page])?>