<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$base_url = Yii::getAlias('@web');
$validationUrl = ['custom-content/validation'];

/* @var $this yii\web\View */
/* @var $model backend\models\City */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="custom-content-form">
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
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        
            <?php ActiveForm::end(); ?>
    </div>
</div>
