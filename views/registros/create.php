<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Registros */

$this->title = 'Create Registros';
$this->params['breadcrumbs'][] = ['label' => 'Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


$itemsDropDown = [];

foreach ($torneos as $torneo) {
	$itemsDropDown[$torneo->id_torneo] =
	$torneo->nombre_torneo;
}






?>
<div class="registros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'itemsDropDown' => $itemsDropDown
    ]) ?>

</div>
