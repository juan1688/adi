<?php

namespace app\controllers;

// use app\models\Company;
use Yii;

class CompanyController extends \yii\web\controller
{
	public function actionIndex()
	{
		$model = new \app\models\Company();
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