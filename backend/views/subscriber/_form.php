<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Subscriber */
/* @var $form yii\widgets\ActiveForm */
$base_url = Yii::getAlias('@web');
$validationUrl = ['subscriber/validation'];
?>

<div class="subscriber-form">
	<div class="container-fluid">
	    <?php $form = ActiveForm::begin([
        'id' => $model->formName(),
		'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'options' => ['enctype' => 'multipart/form-data'],
        'validationUrl' => $validationUrl
    ]); ?>
	    <div class="row">
	    	<div class="col-md-12">
				<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	    	</div>
		</div>
	    <div class="form-group">
	        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	    </div>

	    <?php ActiveForm::end(); ?>

	</div>
</div>
