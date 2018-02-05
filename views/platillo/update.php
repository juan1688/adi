<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Platillo */

$this->title = 'Update Platillo: ' . $model->platillo_id;
$this->params['breadcrumbs'][] = ['label' => 'Platillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->platillo_id, 'url' => ['view', 'id' => $model->platillo_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="platillo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
