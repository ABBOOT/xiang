<?php 
	
	use yii\helpers\url;

	use yii\helpers\HTML;
	use yii\widgets\LinkPager; 
	use yii\widgets\ActiveForm;
	$this -> title = '编辑界面';
 ?>	
	<?php $form = ActiveForm::begin(['action'=>Url::toRoute('position/update')]); ?>
	<h1><?= HTML::encode($this -> title)?></h1>
   <?php echo $form->field($result, 'position_name')->label('公司名字') ?>
   <?php echo $form->field($result, 'position_desc')->label('公司简介') ?>
 

   <?= HTML::activeHiddenInput($result,'id') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>