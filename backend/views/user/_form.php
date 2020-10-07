<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$base_url = Yii::getAlias('@web');
$validationUrl = ['user/validation'];
/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">
	<div class="container-fluid">
		<?php $form = ActiveForm::begin([
			'id' => $model->formName(),
			'enableAjaxValidation' => true,
			'enableClientValidation' => true,
			'options' => ['enctype' => 'multipart/form-data'],
			'validationUrl' => $validationUrl
		]); ?>
		<div class="row">
			<div class = "col-md-6">
				<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
			</div>
			<div class = "col-md-6">
				<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
			</div>
			<div class = "col-md-6">
				<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
			</div>
			<div class = "col-md-6">
				<?= $form->field($model, 'confirm_password')->passwordInput(['maxlength' => true]) ?>
			</div>
		</div>
	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>
	<?php ActiveForm::end(); ?>
	</div>
</div>
