<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Chef */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chef-form">
	<div class="container-fluid">
	    <?php $form = ActiveForm::begin([
        'id' => $model->formName(),
		'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'options' => ['enctype' => 'multipart/form-data'],
        'validationUrl' => $validationUrl
    ]); ?>
	    <div class="row">
			<div class= 'col-md-6'>    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'feature_image')->textInput(['maxlength' => true]) ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true]) ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'linkedin_link')->textInput(['maxlength' => true]) ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'twitter_link')->textInput(['maxlength' => true]) ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'updated_date')->textInput() ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'status')->textInput() ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'created_by')->textInput() ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'updated_by')->textInput() ?>

</div><div class= 'col-md-6'>    <?= $form->field($model, 'created_date')->textInput() ?>

</div>		</div>
	    <div class="form-group">
	        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	    </div>

	    <?php ActiveForm::end(); ?>

	</div>
</div>
