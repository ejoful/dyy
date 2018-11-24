<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Topiclist */

$this->title = Yii::t('app', 'Create Topiclist');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topiclists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topiclist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
