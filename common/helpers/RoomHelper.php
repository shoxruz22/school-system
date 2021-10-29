<?php


namespace common\helpers;

use common\models\Pupil;
use common\models\Room;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class RoomHelper
{
    public static function getStatusList(): array
    {
        return [
            Room::STATUS_ACTIVE => Yii::t('models', 'Актив'),
            Room::STATUS_INACTIVE => Yii::t('models', 'Неактив'),
        ];
    }

    public static function getStatusName(int $name)
    {
        return ArrayHelper::getValue(self::getStatusList(), $name);
    }
    public static function getStatusLabel($status): string
    {
        switch ($status) {
            case Pupil::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            case Pupil::STATUS_INACTIVE:
                $class = 'label label-danger';
                break;
            default:
                $class = 'label label-default';
        }

        return Html::tag('span', ArrayHelper::getValue(self::getStatusList(), $status), [
            'class' => $class,
        ]);
    }
}