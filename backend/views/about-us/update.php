<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUs */

$this->title = 'Update About Us: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'About uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-us-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
