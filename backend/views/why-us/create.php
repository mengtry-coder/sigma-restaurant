<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WhyUs */

$this->title = 'Create Why Us';
$this->params['breadcrumbs'][] = ['label' => 'Why uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="why-us-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
