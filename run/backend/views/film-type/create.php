<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FilmType */

$this->title = Yii::t('app', 'Create Film Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Film Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
