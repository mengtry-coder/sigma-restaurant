<?php
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

echo "<?php\n";
?> 
$this->registerJs('
var controller_id = "<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>";
$("#select_page_size").change(function(){
    var page_size = $("#select_page_size").val();
    var url = window.location.pathname;
        window.location.replace(url+"?r="+controller_id+"/index&page_size="+page_size);
});


$(document).on("click","#modalButton",function () {
    // $("#modal").modal("show")
        // .find("#modalContent")
        // .load($(this).attr("value"));
    $("#overlay").css("display", "block");
    $("#modal").find("#modalContent").load($(this).attr("value"), function(res){
        $(this).html("");
        $("#modal").modal("show")
        $("#modalContent").html(res)
        $("#overlay").css("display", "none");
    })

});

$(document).on("click","#modalButtonView",function () { 
    $("#overlay").css("display", "block");
    $("#res-result").load($(this).attr("value"), function(res){ 
        $(this).html("");
        $("#modal").modal("show")
        $("#modalContent").html(res)
        $("#overlay").css("display", "none");
    })
});

$(document).on("click","#modalButtonUpdate",function () {
    // $("#modal").modal("show")
    //     .find("#modalContent")
    //     .load($(this).attr("value"));
    $("#overlay").css("display", "block");
    $("#modalContent").load($(this).attr("value"), function(res){
        $(this).html("");
        $("#modal").modal("show")
        $("#modalContent").html(res)
        $("#overlay").css("display", "none");
    })
});

');
<?php
echo 
"?>\n";
?>

<?php
/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal; 
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">


<?= $generator->enablePjax ? "    <?php Pjax::begin(); ?>\n" : '' ?>
<?php if(!empty($generator->searchModelClass)): ?>
<?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<br>
<?php endif; ?>
    <div class="panel"> 
        <div class="panel-body">  
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a id="modalButton" value="<?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>, ['create'], ['class' => 'btn btn-success']) ?>" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50 ">
                              <i class="fa fa-plus-square go-right text-gray-100"></i>
                            </span>
                            <span class="text text-gray-100">Add New</span>
                        </a>
                    </div>
                </div>
            </div>
            <br>
    <?php echo"
        <?php\n"; ?>
            Modal::begin([
                'id' => 'modal',
                'class' => 'modal fade',
                'size' => 'modal-lg',
            ]);
            echo "<div id='modalContent'></div>";
            Modal::end();
        <?php echo"
        ?>\n";
        ?>
        <div class="table-responsive">
            <?php if ($generator->indexWidgetType === 'grid'): ?>
    <?= "<?= "?>GridView::widget([
                'dataProvider' => $dataProvider,
                 
                'layout'=>"
                    {items}
                        <div class='row'>
                            <div class='col-md-4'>
                                <label class='form-inline'>
                                    Show ".
                                Html::dropDownList('page_size',
                                $page_size,
                                Yii::$app->params['page_size'],
                                array('class' => 'form-control mx-2', 'id' => 'select_page_size'))."
                                </label>
                            </div>
                            <div class='col-md-4' style='padding-top: 5px;'>
                                {summary}
                            </div>
                            <div class='col-md-4' style='text-align: right;'>
                                {pager}
                            </div>
                        </div>
                        ",
                'pager' => [
                    'firstPageLabel' => 'First',
                    'lastPageLabel' => 'Last',
                    'maxButtonCount' => 5,
                ],
                
                <?= !empty($generator->searchModelClass) ? "//'filterModel' => \$searchModel,\n        
                'columns' => [\n" : "'columns' => [\n"; ?>
                ['class' => 'yii\grid\SerialColumn'],

                <?php
                $count = 0;
                if (($tableSchema = $generator->getTableSchema()) === false) {
                    foreach ($generator->getColumnNames() as $name) {
                        if (++$count < 6) {
                            echo "            '" . $name . "',\n";
                        } else {
                            echo "            //'" . $name . "',\n";
                        }
                    }
                } else {
                    foreach ($tableSchema->columns as $column) {
                        $format = $generator->generateColumnFormat($column);
                        if (++$count < 6) {
                            echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                        } else {
                            echo "            //'" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                        }
                    }
                }
                ?>

                [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions' => ['style' => 'width:260px;'],
                    'header'=>'Actions',
                    'template' => '{update} {delete}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                                return Html::button('<i class ="fa fa-search"></i>',
                                [
                                    'value'=> $url,
                                    'id'=> 'modalButtonView',
                                    'data-pjax'=>'0',
                                    'class' => 'padding-10',
                                ]);
                        },
                        'update' => function ($url, $model) {
                            return Html::button('<i class ="fa fa-wrench"></i>',
                            [
                                'value'=> $url,
                                'id'=> 'modalButtonUpdate',
                                'data-pjax'=>'0',
                                'class' => 'padding-10',
                            ]);
                        }, 



                        'delete' => function ($url, $model) {
                            return Html::a('<span class="fa fa-trash"></span>', $url, [
                                'title' => Yii::t('app', 'lead-delete'),
                                'class' => 'padding-10',
                                'data' => [
                                    'confirm' => 'Are you sure want to delete it?',
                                    'method' => 'post',
                                ],
                            ]);
                        }

                    ],

                ],
                ],
            ]); ?>
            <?php else: ?>
                <?= "<?= " ?>ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemOptions' => ['class' => 'item'],
                    'itemView' => function ($model, $key, $index, $widget) {
                        return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
                    },
                ]) ?>
            <?php endif; ?>
            <?= $generator->enablePjax ? "    <?php Pjax::end(); ?>\n" : '' ?>
        
            </div>
        </div>
    </div>
</div>