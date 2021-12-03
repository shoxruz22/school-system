<?php

use common\helpers\TeacherHelper;
use common\models\Teacher;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/**
<<<<<<< HEAD
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\search\PupilSearch $searchModel
 */
=======
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
    * @var common\models\search\TeacherSearch $searchModel
*/
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

$this->title = Yii::t('models', 'Teachers');
$this->params['breadcrumbs'][] = $this->title;

if (isset($actionColumnTemplates)) {
<<<<<<< HEAD
    $actionColumnTemplate = implode(' ', $actionColumnTemplates);
    $actionColumnTemplateString = $actionColumnTemplate;
} else {
    Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']);
    $actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">' . $actionColumnTemplateString . '</div>';
?>
<div class="teacher-index">
=======
$actionColumnTemplate = implode(' ', $actionColumnTemplates);
    $actionColumnTemplateString = $actionColumnTemplate;
} else {
Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']);
    $actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">'.$actionColumnTemplateString.'</div>';
?>
<div class="giiant-crud teacher-index">
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

    <h1>
        <?= he($this->title) ?>
    </h1>

    <?php Pjax::begin(['id' => 'pjax-main', 'enableReplaceState' => false, 'linkSelector' => '#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success' => 'function(){alert("yo")}']]) ?>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('ui', "Добавить"), ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>

<<<<<<< HEAD
    <hr/>
=======
    <hr />
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

    <div>
        <?php
        $gridColumns = [
            [
                'class' => 'yii\grid\SerialColumn',
                'headerOptions' => ['style' => 'width: 5%', 'class' => 'text-center'],
                'contentOptions' => ['class' => 'text-center'],
            ],
            [
                'attribute' => 'full_name',
                'vAlign' => 'middle',
                'hAlign' => 'left',
            ],
            [
<<<<<<< HEAD
                'attribute' => 'date_birth',
                'vAlign' => 'middle',
                'hAlign' => 'left',
            ],
            [
=======
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
                'attribute' => 'phone',
                'vAlign' => 'middle',
                'hAlign' => 'left',
            ],
            [
                'attribute' => 'gender',
                'vAlign' => 'middle',
                'hAlign' => 'left',
                'value' => function (Teacher $model) {
                    return TeacherHelper::getGenderName($model->gender);
                },
                'filter' => TeacherHelper::getGenderList()
            ],
            [
                'attribute' => 'status',
                'vAlign' => 'middle',
                'hAlign' => 'center',
                'value' => function (Teacher $model) {
                    return TeacherHelper::getStatusLabel($model->status);
                },
                'filter' => TeacherHelper::getStatusList(),
                'format' => 'raw'
            ],
            [
                'class' => 'kartik\grid\ActionColumn',
                'template' => $actionColumnTemplateString,
                'buttons' => [
                    'view' => function ($url, $model) {
                        $options = [
                            'title' => Yii::t('ui', "Подробная информация"),
                            'aria-label' => Yii::t('ui', "Подробная информация"),
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);
                    },
                    'update' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('ui', 'Редактировать'),
                            'aria-label' => Yii::t('ui', 'Редактировать'),
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['update', 'id' => $key], $options);
                    },
                    'delete' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('ui', 'Удалить'),
                            'aria-label' => Yii::t('ui', 'Удалить'),
                            'data-confirm' => Yii::t('ui', 'Вы уверены, что хотите удалить этот элемент?'),
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $key], $options);
                    }
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'view') {
                        $url = Url::to(['view', 'id' => $key]);
                        return $url;
                    }
                },
            ],
        ];

        echo GridView::widget([
            'id' => 'kv-grid-confirmed_list',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => $gridColumns, // check the configuration for grid columns by clicking button above
            'containerOptions' => ['style' => 'overflow: hidden'], // only set when $responsive = false
            'headerRowOptions' => ['class' => 'kartik-sheet-style'],
            'filterRowOptions' => ['class' => 'kartik-sheet-style'],
            'pjax' => true,
            'toolbar' => [
                [
                    'content' =>
                        Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], [
                            'class' => 'btn btn-default',
<<<<<<< HEAD
                            'title' => Yii::t('kvgrid', 'Reset Grid'),
=======
                            'title' => Yii::t('kartik-v grid', 'Reset Grid'),
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
                            'data-pjax' => 0,
                        ]),
                    'options' => ['class' => 'btn-group mr-2']
                ],
            ],
            'export' => [
                'fontAwesome' => true
            ],
            'panel' => [
                'type' => GridView::TYPE_PRIMARY,
            ],
            'persistResize' => false,
            'toggleDataOptions' => ['minCount' => 10],
        ]);
        ?>
    </div>

</div>


<?php Pjax::end() ?>
<<<<<<< HEAD
=======


>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
