<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$base_url = Yii::getAlias('@web');
$validationUrl = ['message/validation'];

/* @var $this yii\web\View */
/* @var $model backend\models\Message */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-form">
	<div class="container-fluid">
	    <?php $form = ActiveForm::begin([
    'id' => $model->formName(),
    'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'options' => ['enctype' => 'multipart/form-data'],
    'validationUrl' => $validationUrl,
]);?>
	    <div class="row">
			<div class= 'col-md-4'>
				<?=$form->field($model, 'name')->textInput(['maxlength' => true])?>
			</div>
			<div class= 'col-md-4'>
				<?=$form->field($model, 'email')->textInput(['maxlength' => true])?>
			</div>
			<div class= 'col-md-4'>
				<?=$form->field($model, 'subject')->textInput(['maxlength' => true])?>
			</div>
			<div class= 'col-md-12'>
				<?=$form->field($model, 'text_message')->textArea(['maxlength' => true])?>
			</div>
		</div>
	    <div class="form-group">
	        <?=Html::submitButton('Save', ['class' => 'btn btn-success'])?>
	    </div>
	    <?php ActiveForm::end();?>
	</div>
</div>
