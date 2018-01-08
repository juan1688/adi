<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name); ?></li>
    <li><label>Descripción</label>: <?= Html::encode($model->description); ?></li>
    <li><label>User Id</label>: <?= Html::encode($model->user_id); ?></li>
</ul>