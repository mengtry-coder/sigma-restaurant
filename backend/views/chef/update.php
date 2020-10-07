<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Chef */

$this->title = 'Update Chef: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Chefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chef-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
