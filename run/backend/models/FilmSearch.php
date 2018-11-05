<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Film;

/**
 * FilmSearch represents the model behind the search form about `backend\models\Film`.
 */
class FilmSearch extends Film
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'total_count'], 'integer'],
            [['name', 'keywords', 'description', 'play_time', 'update_time', 'quality', 'type', 'category', 'location', 'language', 'imdb', 'star', 'descr', 'list_pic', 'detail_pic', 'album', 'short_video_url', 'short_video_embed', 'subtitle', 'url'], 'safe'],
            [['score'], 'number'],
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
        $query = Film::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'play_time' => $this->play_time,
            'update_time' => $this->update_time,
            'total_count' => $this->total_count,
            'score' => $this->score,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'quality', $this->quality])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'imdb', $this->imdb])
            ->andFilterWhere(['like', 'star', $this->star])
            ->andFilterWhere(['like', 'descr', $this->descr])
            ->andFilterWhere(['like', 'list_pic', $this->list_pic])
            ->andFilterWhere(['like', 'detail_pic', $this->detail_pic])
            ->andFilterWhere(['like', 'album', $this->album])
            ->andFilterWhere(['like', 'short_video_url', $this->short_video_url])
            ->andFilterWhere(['like', 'short_video_embed', $this->short_video_embed])
            ->andFilterWhere(['like', 'subtitle', $this->subtitle])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
