<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FoodTypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-type-search">
    <div class="col-md-12 search-bd"> 

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-md-4">
                <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'updated_date') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'created_date') ?>

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Reset',['index'], ['class' => 'btn btn-outline-primary']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

</div>
<style>
.search-bd{
    background: #eaecf4;;
    height: 100px; 
    padding: 15px;  
}
.btn-primary {
    color: #fff;
    background-color: #3f5773;
    border-color: #3f5773; 
    margin-top: 30px;
}
</style>