<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Supplies */

$this->title = 'Create Supplies';
$this->params['breadcrumbs'][] = ['label' => 'Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
