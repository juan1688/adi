<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Brand;
?>

<h1>Agregar Compañía</h1>

<div class="company-add">

<?php
	$brand = Brand::find()
	        ->select(['name'])
	        ->indexBy(['id'])
	        ->column();
?>

	<?php $form = ActiveForm::begin() ?>

		<?php echo $form->field($model, "name") ?>
		<?php echo $form->field($model, "description") ?>
		<?php echo $form->field($model, "user_id")->dropdownList($brand,
			    ['prompt'=>'Select Category']
			);
		?>

		<div class="form-group">
			<?php echo Html::submitButton("Submit", ["class" => "btn btn-primary"]) ?>
		</div>

	<?php ActiveForm::end() ?>
</div>