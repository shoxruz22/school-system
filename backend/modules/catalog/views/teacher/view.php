<?php

use common\helpers\TeacherHelper;
use common\models\Teacher;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\Teacher $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Teacher');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Teachers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud teacher-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h2>
        <?= he($this->title) ?>
    </h2>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
                '<span class="glyphicon glyphicon-pencil"></span> ' . Yii::t('ui', 'Редактировать'),
                ['update', 'id' => $model->id],
                ['class' => 'btn btn-info']) ?>

            <?= Html::a(
                '<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('ui', "Добавить"),
                ['create'],
                ['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
                . Yii::t('ui', "Полный список"), ['index'], ['class' => 'btn btn-warning']) ?>
        </div>

    </div>

    <hr/>

    <?php $this->beginBlock('common\models\Teacher'); ?>

    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'teacher_name',
        'age',
        'phone_number',
        'address',
        [
            'attribute' => 'gender',
            'value' => function (Teacher $model) {
                return TeacherHelper::getGenderName($model->gender);
            },
        ],
        [
            'attribute' => 'status',
            'value' => function (Teacher $model) {
                return TeacherHelper::getStatusLabel($model->status);
            },
            'format' => 'raw'
        ]

    ],
    ]); ?>

    
    <hr/>

    <?=
    Html::a('<span class="glyphicon glyphicon-trash"></span> ' . Yii::t('ui', "Удалить"), ['delete', 'id' => $model->id],
        [
            'class' => 'btn btn-danger',
            'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
            'data-method' => 'post',
        ]);
    ?>
    <?php $this->endBlock(); ?>


    
    <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [
 [
     'label' => '<b> <i class="fa fa-info-circle"></i> ' . Yii::t('ui', "Подробная информация") . '</b>',
    'content' => $this->blocks['common\models\Teacher'],
    'active'  => true,
],
 ]
                 ]
    );
    ?>
</div>
