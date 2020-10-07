<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-search">
    <div class="col-md-12 search-bd">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
]);?>
    <div class="row">
        <div class="col-md-3">
            <?=$form->field($model, 'name')?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'subject')?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'email')?>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?=Html::submitButton('Search', ['class' => 'btn btn-primary'])?>
                <?=Html::a('Reset', ['index'], ['class' => 'btn btn-primary'])?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end();?>
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