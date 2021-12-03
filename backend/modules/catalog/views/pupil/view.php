<?php

use common\helpers\PupilHelper;
use common\models\Pupil;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var common\models\Pupil $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Pupil');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Pupils'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="pupil-view">

    <!-- flash message -->
    <?php if (Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= Yii::$app->session->getFlash('deleteError') ?>
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

    <?php $this->beginBlock('common\models\Pupil'); ?>

    <?= DetailView::widget([
        'template' => "<tr><th style='width: 20%'>{label}</th><td>{value}</td></tr>",
        'model' => $model,
        'attributes' => [
            'full_name',
<<<<<<< HEAD
            'date_birth',
=======
            'age',
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
            [
                'attribute' => 'gender',
                'value' => function (Pupil $model) {
                    return PupilHelper::getGenderName($model->gender);
                },
            ],
<<<<<<< HEAD
            [
                'attribute' => 'img',
                'value' => $model->getPhotoSrc(),
                'format' => ['image', ['width' => 100, 'height' => 100]]
            ],
            'phone',
=======
            'phone',
            'address',
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
            [
                'attribute' => 'status',
                'value' => function (Pupil $model) {
                    return PupilHelper::getStatusLabel($model->status);
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
                    'content' => $this->blocks['common\models\Pupil'],
                    'active' => true,
                ],
            ]
        ]
    );
    ?>
</div>
