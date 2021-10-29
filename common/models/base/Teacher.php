<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "teacher".
 *
 * @property integer $id
 * @property string $teacher_name
 * @property string $age
 * @property string $phone_number
 * @property string $address
 * @property string $gender
 * @property string $email
 * @property string $subject
 * @property integer $status
 * @property integer $is_deleted
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $aliasModel
 */
abstract class Teacher extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
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
            [['teacher_name', 'age', 'phone_number', 'address', 'gender', 'email', 'subject'], 'required'],
            [['status', 'is_deleted'], 'integer'],
            [['teacher_name', 'age', 'phone_number', 'address', 'gender', 'email', 'subject'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'teacher_name' => Yii::t('models', 'Teacher Name'),
            'age' => Yii::t('models', 'Age'),
            'phone_number' => Yii::t('models', 'Phone Number'),
            'address' => Yii::t('models', 'Address'),
            'gender' => Yii::t('models', 'Gender'),
            'email' => Yii::t('models', 'Email'),
            'subject' => Yii::t('models', 'Subject'),
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
     * @return \common\models\query\TeacherQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TeacherQuery(get_called_class());
    }


}
