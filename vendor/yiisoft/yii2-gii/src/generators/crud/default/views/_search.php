<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->searchModelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search">
    <div class="col-md-12 search-bd"> 

    <?= "<?php " ?>$form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
<?php if ($generator->enablePjax): ?>
        'options' => [
            'data-pjax' => 1
        ],
<?php endif; ?>
    ]); ?>
    <div class="row">
        <div class="col-md-4">
            <?php
                $count = 0;
                foreach ($generator->getColumnNames() as $attribute) {
                    if (++$count < 6) {
                        echo "    <?= " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
                    } else {
                        echo "    <?php // echo " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
                    }
                }
                ?>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Search') ?>, ['class' => 'btn btn-primary']) ?>
                <?= "<?= " ?>Html::a(<?= $generator->generateString('Reset') ?>,['index'], ['class' => 'btn btn-outline-primary']) ?>
            </div>
        </div>
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>
</div>

</div>
<style>
.search-bd{
    background: #eaecf4;;
    height: 100px; 
    padding: 15px;  
}
.btn-primary {
    color: #fff;
    background-color: #3f5773;
    border-color: #3f5773; 
    margin-top: 30px;
}
</style>