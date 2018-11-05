<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FilmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="film-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?php // $form->field($model, 'name') ?>

    <?php // $form->field($model, 'keywords') ?>

    <?php // $form->field($model, 'description') ?>

    <?= $form->field($model, 'play_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'quality') ?>

    <?php  echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'total_count') ?>

    <?php  echo $form->field($model, 'category') ?>

    <?php  echo $form->field($model, 'location') ?>

    <?php  echo $form->field($model, 'language') ?>

    <?php // echo $form->field($model, 'imdb') ?>

    <?php // echo $form->field($model, 'star') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'list_pic') ?>

    <?php // echo $form->field($model, 'detail_pic') ?>

    <?php // echo $form->field($model, 'album') ?>

    <?php // echo $form->field($model, 'short_video_url') ?>

    <?php // echo $form->field($model, 'short_video_embed') ?>

    <?php // echo $form->field($model, 'subtitle') ?>

    <?php // echo $form->field($model, 'score') ?>

    <?php // echo $form->field($model, 'url') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
