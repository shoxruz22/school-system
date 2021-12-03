<?php
declare(strict_types=1);

namespace common\helpers;

use common\models\Teacher;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class TeacherHelper
{
    public static function getStatusList(): array
    {
        return [
            Teacher::STATUS_ACTIVE => Yii::t('models', 'Актив'),
            Teacher::STATUS_INACTIVE => Yii::t('models', 'Неактив'),
        ];
    }

    public static function getStatusName(int $name)
    {
        return ArrayHelper::getValue(self::getStatusList(), $name);
    }

    public static function getStatusLabel($status): string
    {
        switch ($status) {
            case Teacher::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            case Teacher::STATUS_INACTIVE:
                $class = 'label label-danger';
                break;
            default:
                $class = 'label label-default';
        }

        return Html::tag('span', ArrayHelper::getValue(self::getStatusList(), $status), [
            'class' => $class,
        ]);
    }

    public static function getGenderList(): array
    {
        return [
            Teacher::GENDER_MALE => Yii::t('models', 'male'),
            Teacher::GENDER_FEMALE => Yii::t('models', 'female'),
        ];
    }

    public static function getGenderName(int $gender): string
    {
        return ArrayHelper::getValue(self::getGenderList(), $gender);
    }
}
