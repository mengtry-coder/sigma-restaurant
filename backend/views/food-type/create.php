<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FoodType */

$this->title = 'Create Food Type';
$this->params['breadcrumbs'][] = ['label' => 'Food Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-type-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
