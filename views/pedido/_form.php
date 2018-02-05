<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pedido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'platillo_id')->textInput() ?>

    <?= $form->field($model, 'fecha_pedido')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'metodo_de_pago')->textInput() ?>

    <?= $form->field($model, 'estatus_entrega')->textInput() ?>

    <?= $form->field($model, 'estatus_pago')->textInput() ?>

    <?= $form->field($model, 'estatus_cancelacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
