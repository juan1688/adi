<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Platillo */

$this->title = 'Create Platillo';
$this->params['breadcrumbs'][] = ['label' => 'Platillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="platillo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
