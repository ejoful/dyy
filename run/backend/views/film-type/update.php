<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FilmType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Film Type',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Film Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="film-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
