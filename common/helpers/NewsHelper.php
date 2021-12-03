<?php
declare(strict_types=1);

namespace common\helpers;

use common\models\News;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class NewsHelper
{
    public static function getStatusList(): array
    {
        return [
            News::STATUS_ACTIVE => Yii::t('models', 'Актив'),
            News::STATUS_INACTIVE => Yii::t('models', 'Неактив'),
        ];
    }
    public static function getStatusName(int $name)
    {
        return ArrayHelper::getValue(self::getStatusList(), $name);
    }
        public static function getStatusLabel($status): string
    {
        switch ($status) {
            case News::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            case News::STATUS_INACTIVE:
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