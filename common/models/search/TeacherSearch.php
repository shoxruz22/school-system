<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Teacher;

/**
* TeacherSearch represents the model behind the search form about `common\models\Teacher`.
*/
class TeacherSearch extends Teacher
{
/**
* @inheritdoc
*/
public function rules()
{
return [
<<<<<<< HEAD
[['id', 'date_birth', 'gender', 'status', 'is_deleted', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['full_name', 'img', 'phone', 'address'], 'safe'],
=======
[['id', 'status', 'is_deleted', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['full_name', 'age', 'phone', 'address', 'gender' ], 'safe'],
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = Teacher::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
<<<<<<< HEAD
            'date_birth' => $this->date_birth,
            'gender' => $this->gender,
=======
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
<<<<<<< HEAD
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address]);
=======
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'gender', $this->gender]);

>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

return $dataProvider;
}
}