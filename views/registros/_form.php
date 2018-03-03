<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Registros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registros-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_torneo')->dropDownList($itemsDropDown) ?>

    <?= $form->field($model, 'id_equipo')->textInput() ?>

    <?= $form->field($model, 'categoria')->textInput() ?>

    <?= $form->field($model, 'cant_participantes')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
