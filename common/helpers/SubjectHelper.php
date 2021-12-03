<?php
<<<<<<< HEAD
declare(strict_types=1);

namespace common\helpers;

=======

namespace common\helpers;


use common\models\Pupil;
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
use common\models\Subject;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class SubjectHelper
{
<<<<<<< HEAD
=======

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
    public static function getStatusList(): array
    {
        return [
            Subject::STATUS_ACTIVE => Yii::t('models', 'Актив'),
            Subject::STATUS_INACTIVE => Yii::t('models', 'Неактив'),
        ];
    }

    public static function getStatusName(int $name)
    {
        return ArrayHelper::getValue(self::getStatusList(), $name);
    }

    public static function getStatusLabel($status): string
    {
        switch ($status) {
<<<<<<< HEAD
            case Subject::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            case Subject::STATUS_INACTIVE:
=======
            case Pupil::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            case Pupil::STATUS_INACTIVE:
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
                $class = 'label label-danger';
                break;
            default:
                $class = 'label label-default';
        }

        return Html::tag('span', ArrayHelper::getValue(self::getStatusList(), $status), [
            'class' => $class,
        ]);
    }
<<<<<<< HEAD



}
=======
}
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
