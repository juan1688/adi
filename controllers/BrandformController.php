<?php

namespace app\controllers;

use app\models\Brand;
use Yii;

class BrandformController extends \yii\web\controller
{
	public function actionIndex()
	{
		$brands = new Brand();
		$brands = $brands::find()->all();

		return $this->render("index",["brands" => $brands]);
	}
	public function actionAdd()
	{
		$model = new Brand();
		if($model->load(Yii::$app->request->post()) ){
			$model->save();
		}
		else
			{
			// return $this->render('add');
			return $this->render("add",["model" => $model]);
		}
	}
}