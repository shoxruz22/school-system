<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "payment".
 *
 * @property integer $id
 * @property string $name
 * @property string $date
 * @property string $description
 * @property integer $type
 * @property integer $amount
 * @property integer $status
 * @property integer $is_deleted
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $aliasModel
 */
abstract class Payment extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::className(),
            ],
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'date', 'type'], 'required'],
            [['date'], 'safe'],
            [['description'], 'string'],
            [['type', 'status', 'is_deleted'], 'integer'],
            [['name', 'amount'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'name' => Yii::t('models', 'Name'),
            'date' => Yii::t('models', 'Date'),
            'description' => Yii::t('models', 'Description'),
            'type' => Yii::t('models', 'Type'),
            'amount' => Yii::t('models', 'Amount'),
            'status' => Yii::t('models', 'Status'),
            'is_deleted' => Yii::t('models', 'Is Deleted'),
            'created_at' => Yii::t('models', 'Created At'),
            'updated_at' => Yii::t('models', 'Updated At'),
            'created_by' => Yii::t('models', 'Created By'),
            'updated_by' => Yii::t('models', 'Updated By'),
        ];
    }



    /**
     * @inheritdoc
     * @return \common\models\query\PaymentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PaymentQuery(get_called_class());
    }


}
