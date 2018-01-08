<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="brand-add">
	<?php
foreach ($brands as $brand) {
			echo $brand->id;
			echo "<br>";
			echo $brand->name;
			echo "<br>";
			echo $brand->description;
			echo "<br>";
			echo $brand->parent_id;
		}
	?>
</div>