<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FoodType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-type-form">
	<div class="container-fluid">
	    <?php $form = ActiveForm::begin(); ?>
	    <div class="row">
	    	<div class="col-md-12">
	    		<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
	    	</div>
	    	<div class="col-md-12">
    			<?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>
	    	</div>
	    	<div class="col-md-12">
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
</div>
