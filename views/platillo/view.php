<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Platillo */

$this->title = $model->platillo_id;
$this->params['breadcrumbs'][] = ['label' => 'Platillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="platillo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->platillo_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->platillo_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'platillo_id',
            'nombre',
            'descripcion:ntext',
            'imagen:ntext',
            'precio',
        ],
    ]) ?>

</div>
