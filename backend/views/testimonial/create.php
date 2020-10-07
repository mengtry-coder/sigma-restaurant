<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Testimonial */

$this->title = 'Create Testimonial';
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonial-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
