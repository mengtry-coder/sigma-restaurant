<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Chef */

$this->title = 'Create Chef';
$this->params['breadcrumbs'][] = ['label' => 'Chefs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chef-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
