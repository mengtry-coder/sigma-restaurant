<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">
	<div class="container-fluid">
	    <?php $form = ActiveForm::begin();?>
	    <div class="row">
            <div class="col-md-6">
                <?=$form->field($model, 'brand_name')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'location')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'open_day')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'email')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'contact')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'short_description')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'title')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'open_time')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'twitter_url')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'facebook_url')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'instagram_url')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'skype_url')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-6">
                <?=$form->field($model, 'linkedin_url')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-12">
                <?=$form->field($model, 'description')->textArea(['maxlength' => true])?>
            </div>
            <div class= "col-md-6">
                <?php
$model->status = $model->isNewRecord ? 1 : $model->status;
echo $form->field($model, 'status')->radioList(['1' => 'Active', '0' => 'Inactive'], ['unselect' => false, 'default' => 1]);
?>
            </div>
        </div>

            <div class="form-group">
                <?=Html::submitButton('Save', ['class' => 'btn btn-success'])?>
            </div>

	    <?php ActiveForm::end();?>

	</div>
</div>
