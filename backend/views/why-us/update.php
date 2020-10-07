<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WhyUs */

$this->title = 'Update Why Us: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Why uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="why-us-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
