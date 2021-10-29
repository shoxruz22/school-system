<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Room $model
*/

$this->title = Yii::t('models', 'Room');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Room'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="pupil-update">

    <h2>
        <?= he($this->title) ?>
    </h2>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('ui', "Подробная информация"), ['view', 'id' => $model->id], ['class' => 'btn btn-info']) ?>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
                . Yii::t('ui', "Полный список"), ['index'], ['class' => 'btn btn-warning']) ?>
        </div>
    </div>

    <hr/>

    <?php echo $this->render('_form', [
        'model' => $model,
    ]); ?>

</div>
