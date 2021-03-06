<?php
 
$this->registerJs('
var controller_id = "user";
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
?>
<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal; 
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<br>
    <div class="panel"> 
        <div class="panel-body">  
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a id="modalButton" value="<?= Url::toRoute(['user/create']) ?>" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50 ">
                              <i class="fa fa-plus-square go-right text-gray-100"></i>
                            </span>
                            <span class="text text-gray-100">Add New</span>
                        </a> 
                    </div>
                </div>
            </div>
            <br>
    
        <?php
            Modal::begin([
                'id' => 'modal',
                'class' => 'modal fade',
                'size' => 'modal-lg',
            ]);
            echo "<div id='modalContent'></div>";
            Modal::end();
        
        ?>
        <div class="table-responsive">
                <?= GridView::widget([
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
                
                //'filterModel' => $searchModel,
        
                'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email:email',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions' => ['style' => 'width:260px;'],
                    'header'=>'Actions',
                    'template' => '{update}',
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

                    ],

                ],
                ],
            ]); ?>
                                
            </div>
        </div>
    </div>
</div>