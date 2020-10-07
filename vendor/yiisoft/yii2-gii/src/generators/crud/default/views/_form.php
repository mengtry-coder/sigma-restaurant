<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
$base_url = Yii::getAlias('@web');
$validationUrl = ['<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>/validation'];

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">
	<div class="container-fluid">
	    <?= "<?php " ?>$form = ActiveForm::begin([
        'id' => $model->formName(),
		'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'options' => ['enctype' => 'multipart/form-data'],
        'validationUrl' => $validationUrl
    ]); ?>
	    <div class="row">
			<?php foreach ($generator->getColumnNames() as $attribute) {
			    if (in_array($attribute, $safeAttributes)) {
			    	echo "<div class= 'col-md-6'>";
			        echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
			    	echo "</div>";
			    }
			} ?>
		</div>
	    <div class="form-group">
	        <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Save') ?>, ['class' => 'btn btn-success']) ?>
	    </div>

	    <?= "<?php " ?>ActiveForm::end(); ?>

	</div>
</div>
