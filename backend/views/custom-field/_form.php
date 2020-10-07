<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$base_url = Yii::getAlias('@web');
/* @var $this yii\web\View */
/* @var $model backend\models\CustomField */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="custom-field-form">
	<div class="container-fluid">
	    <?php $form = ActiveForm::begin(); ?>
	    <div class="row">
			<div class="col-md-12">
				<label class="control-label">Feature Image</label>
                <div style="display: block">
                    <?= $form->field($model, 'file')->fileInput(['multiple' => false, 'accept' => 'image/*',])->label(false) ?>
                </div>
                <div class="wr_img">
                    <?php if ($model->feature_image == "" || $model->isNewRecord ){ ?>
                        <label for = 'customfield-file'>
                            <?= Html::img(Url::toRoute(['assets/img/default_empty_image.svg']), ['alt' => 'Empty Image', 'class' => 'img-responsive', 'id' => 'feature_images']) ?>
                        </label>
                    <?php } else {?>
                        <label for="customfield-file">
                            <img id="feature_images" src="<?= Yii::$app->params['backend_url'].$model->feature_image;?>" class="img-responsive" onError="this.onerror=null;this.src='<?= $base_url.'/backend/uploads/empty-avatar.png' ?>';">
                        </label>
                    <?php } ?>
                </div>
			</div>
			<div class="col-md-12">
				<?= $form->field($model, 'key')->textInput(['maxlength' => true, 'disabled' => true]) ?>
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
        $("#customfield-file").change(function () {
            readURL(this);
        });
        $("#customfield-file").hide();
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