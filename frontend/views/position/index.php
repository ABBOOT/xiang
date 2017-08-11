<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\url;

$this -> title = '添加页面';


?>
<?php $form = ActiveForm::begin(['action'=>Url::toRoute('position/add')]); ?>
	<h1><?= HTML::encode($this -> title)?></h1>
    <?= $form->field($model, 'position_name')->label('公司名称') ?>

    <?= $form->field($model, 'position_desc')->label('公司简介') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>