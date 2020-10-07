<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\assets\AppAsset;
AppAsset::register($this);
?>
<!-- Nested Row within Card Body -->
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login</h1>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'user']); ?>
            <div class="form-group">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control form-control-user', 'id' => 'exampleInputEmail', 'aria-describedby' => 'emailHelp', 'placeholder' => 'Enter Username...']) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-user', 'id' => 'exampleInputPassword', 'placeholder' => 'Password']) ?>
            </div>
            <div class="form-group">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
            <!-- <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="register.html">Create an Account!</a>
            </div> -->
        </div>
    </div>
</div>