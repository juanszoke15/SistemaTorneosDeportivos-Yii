<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Registros */

$this->title = 'Update Registros: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_registro, 'url' => ['view', 'id' => $model->id_registro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="registros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
