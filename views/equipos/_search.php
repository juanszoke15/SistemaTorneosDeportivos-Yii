<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EquiposSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_equipo') ?>

    <?= $form->field($model, 'nombre_equipo') ?>

    <?= $form->field($model, 'shortname_equipo') ?>

    <?= $form->field($model, 'fecha_equipo') ?>

    <?= $form->field($model, 'direccion_equipo') ?>

    <?php // echo $form->field($model, 'email_equipo') ?>

    <?php // echo $form->field($model, 'web_equipo') ?>

    <?php // echo $form->field($model, 'user_equipo') ?>

    <?php // echo $form->field($model, 'password_equipo') ?>

    <?php // echo $form->field($model, 'authkey') ?>

    <?php // echo $form->field($model, 'admin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
