<?php

<<<<<<< HEAD
use common\helpers\SubjectHelper;
use common\models\Subject;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\Subject $model
*/
=======
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;


/**
 * @var yii\web\View $this
 * @var common\models\Subject $model
 */
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Subject');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Subjects'), 'url' => ['index']];
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class=" subject-view">
=======
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="subject-view">
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

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

<<<<<<< HEAD
=======

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
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

    <?php $this->beginBlock('common\models\Subject'); ?>

<<<<<<< HEAD
    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'name',
        [
                'attribute' => 'status',
                'value' => function (Subject $model) {
                    return SubjectHelper::getStatusLabel($model->status);
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

=======

    <?= DetailView::widget([
        'model' => $model,
        'template' => "<tr><th style='width: 20%'>{label}</th><td>{value}</td></tr>",
        'attributes' => [
            'name',
            'viewActivePrice'
        ],
    ]); ?>


    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Удалить', ['delete', 'id' => $model->id],
        [
            'class' => 'btn btn-danger',
            'data-confirm' => '' . 'Вы уверены, что хотите удалить этот элемент?' . '',
            'data-method' => 'post',
        ]); ?>
    <?php $this->endBlock(); ?>



>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
    <?= Tabs::widget(
        [
            'id' => 'relation-tabs',
            'encodeLabels' => false,
            'items' => [
                [
                    'label' => '<b> <i class="fa fa-info-circle"></i> ' . Yii::t('ui', "Подробная информация") . '</b>',
<<<<<<< HEAD
                    'content' => $this->blocks['common\models\Pupil'],
=======
                    'content' => $this->blocks['common\models\Subject'],
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
                    'active' => true,
                ],
            ]
        ]
    );
    ?>
</div>
