<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
<<<<<<< HEAD
use common\models\Subject;

/**
* SubjectSearch represents the model behind the search form about `common\models\Subject`.
*/
class SubjectSearch extends Subject
=======
use common\models\subject;

/**
* SubjectSearch represents the model behind the search form about `common\models\subject`.
*/
class SubjectSearch extends subject
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
{
/**
* @inheritdoc
*/
public function rules()
{
return [
<<<<<<< HEAD
[['id', 'status', 'is_deleted', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
=======
[['id','status'], 'integer'],
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
            [['name'], 'safe'],
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
<<<<<<< HEAD
$query = Subject::find();
=======
$query = subject::find();
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2

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
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

return $dataProvider;
}
}
=======
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])->andFilterWhere(['like', 'status', $this->status]);

return $dataProvider;
}
}
>>>>>>> f5e53ef486195602315b7c6bcf81914f468163f2
