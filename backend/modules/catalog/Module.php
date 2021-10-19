<?php

namespace backend\modules\catalog;

use dmstr\web\traits\AccessBehaviorTrait;

class Module extends \yii\base\Module
{
    use AccessBehaviorTrait;

    public $controllerNamespace = 'backend\modules\catalog\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
