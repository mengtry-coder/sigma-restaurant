<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model backend\models\Event */
/* @var $form yii\widgets\ActiveForm */
$validationUrl = ['event/validation'];
$base_url = Yii::getAlias('@web');
?>

<div class="event-form">
	<div class="container-fluid">
	    <?php $form = ActiveForm::begin([
        'id' => $model->formName(),
		'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'options' => ['enctype' => 'multipart/form-data'],
        'validationUrl' => $validationUrl
    ]); ?>
	    <div class="row">
            <div class="col-md-6">
                <label class="control-label">Feature Image</label>
                <div style="display: block">
                    <?= $form->field($model, 'file')->fileInput(['multiple' => false, 'accept' => 'image/*',])->label(false) ?>
                </div>
                <div class="wr_img">
                    <?php if ($model->feature_image == "" || $model->isNewRecord ){ ?>
                        <label for = 'event-file'>
                            <?= Html::img(Url::toRoute(['assets/img/default_empty_image.svg']), ['alt' => 'Empty Image', 'class' => 'img-responsive', 'id' => 'feature_images']) ?>
                        </label>
                    <?php } else {?>
                        <label for="event-file">
                            <img id="feature_images" src="<?= Yii::$app->params['backend_url'].$model->feature_image;?>" class="img-responsive" onError="this.onerror=null;this.src='<?= $base_url.'/backend/uploads/empty-avatar.png' ?>';">
                        </label>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-12">
                        <?php
                        $model->status = $model->isNewRecord ? 1 : $model->status;
                        echo $form->field($model, 'status')->radioList(['1' => 'Active', '0' => 'Inactive'], ['unselect' => false, 'default' => 1]);
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
	</div>
</div>
<?php

$script = <<< JS
    $(function () {
        $("#event-file").change(function () {
            readURL(this);
        });
        $("#event-file").hide();
    });
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                x= e.target.result;
                $("#feature_images").attr("src", e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
JS;
$this->registerJS($script);
?>

