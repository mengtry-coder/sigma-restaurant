<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WhyUs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="why-us-form">
	<div class="container-fluid">
	    <?php $form = ActiveForm::begin(); ?>
	    <div class="row">
	    	<div class="col-md-6">
	    		<?= $form->field($model, 'short_description')->textInput(['maxlength' => true]) ?>
	    	</div>
	    	<div class="col-md-6">
	    		<?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
	    		
	    	</div>
	    	<div class="col-md-6"><?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
	    		
	    	</div>
	    	<div class="col-md-6"><?= $form->field($model, 'sub_title')->textInput(['maxlength' => true]) ?>
	    		
	    	</div>
	    	<div class= "col-md-12">
                <?php
                    $model->status = $model->isNewRecord ? 1 : $model->status;
                    echo $form->field($model, 'status')->radioList(['1' => 'Active', '0' => 'Inactive'], ['unselect' => false, 'default' => 1]);
                ?>
            </div>
	    </div>
	    	<div class="form-group">
		        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
		    </div>

	    <?php ActiveForm::end(); ?>
</div>
