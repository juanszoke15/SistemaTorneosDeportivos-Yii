<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_registro') ?>

    <?= $form->field($model, 'id_torneo') ?>

    <?= $form->field($model, 'id_equipo') ?>

    <?= $form->field($model, 'categoria') ?>

    <?= $form->field($model, 'cant_participantes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
