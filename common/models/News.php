<?php

namespace common\models;

use Yii;
use \common\models\base\News as BaseNews;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * This is the model class for table "_news".
 */
class News extends BaseNews
{
    public $photoFile1;

    const PATH_PHOTO = '/uploads/photos/news';


    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
                [[ 'title'], 'required'],
                [['photoFile1'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
            ]
        );
    }
    #region Getters
    public static function getCount()
    {
        return News::find()->count();
    }

    public function getLastId()
    {
        $lastId = News::find()->select('id')
            ->orderBy(['id' => SORT_DESC])
            ->scalar() ?: 0;
        return ++$lastId;
    }

    public static function getPhotoAlias()
    {
        return Yii::getAlias('@appRoot') . self::PATH_PHOTO;
    }

    public function getPhotoSrc()
    {
        return Url::to(self::PATH_PHOTO . '/' . $this->img);
    }

    #endregion

    #region Checker
    public function isPhotoExists(): bool
    {
        return file_exists(self::getPhotoAlias() . '/' . $this->img);
    }

    #endregion

    public function deletePhoto(): bool
    {
        return unlink(self::getPhotoAlias() . '/' . $this->img);
    }

    public function generatePhotoName()
    {
        if (self::getIsNewRecord()) {
            return 'news_' . $this->getLastId() . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile1->extension;
        } else {
            return 'news_' . $this->id . '-' . (int)(microtime(true) * (1000)) . '.' . $this->photoFile1->extension;
        }
    }

    public function uploadPhoto()
    {
        if ($this->validate()) {
            $path = self::getPhotoAlias();
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $photoName = $this->generatePhotoName();
            $this->photoFile1->saveAs($path . '/' . $photoName);
            $this->img = $photoName;
            return true;
        } else {
            return false;
        }
    }

    public function updatePhoto()
    {
        if ($this->isPhotoExists()) {
            $this->deletePhoto();
        }
        $this->uploadPhoto();
    }
}
