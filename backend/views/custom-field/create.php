<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomField */

$this->title = 'Create Custom Field';
$this->params['breadcrumbs'][] = ['label' => 'Custom Fields', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custom-field-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
