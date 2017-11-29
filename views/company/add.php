<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="company-add">
	<?php $form = ActiveForm::begin() ?>

		<?php echo $form->field($model, "name") ?>
		<?php echo $form->field($model, "description") ?>

		<div class="form-group">
			<?php echo Html::submitButton("Submit", ["class" => "btn btn-primary"]) ?>
		</div>

	<?php ActiveForm::end() ?>
</div>