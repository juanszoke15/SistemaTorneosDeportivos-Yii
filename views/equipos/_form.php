<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Equipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shortname_equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_equipo')->textInput() ?>

    <?= $form->field($model, 'direccion_equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'web_equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authkey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
