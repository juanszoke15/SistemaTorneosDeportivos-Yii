<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Torneos */

$this->title = 'Create Torneos';
$this->params['breadcrumbs'][] = ['label' => 'Torneos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="torneos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
