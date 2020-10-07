<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomContent */

$this->title = 'Update Custom Content: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Custom Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="custom-content-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
