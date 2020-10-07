<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomContent */

$this->title = 'Create Custom Content';
$this->params['breadcrumbs'][] = ['label' => 'Custom Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custom-content-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
