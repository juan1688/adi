<?php

namespace app\controllers;

use app\models\Company;
use Yii;

class CompanyController extends \yii\web\controller
{
	public function actionIndex()
	{
		$companies = Company::find()->all();
		foreach ($companies as $company) {
			echo $company->id;
			echo "<br>";
			echo $company->name;
			echo "<br>";
			echo $company->description;
		}
		// $model = new Company();

		// return $this->render("index",["model" => $model]);
	}
	public function actionAdd()
	{
		$model = new Company();
		if($model->load(Yii::$app->request->post()) ){
			$model->save();
           return $this->render('add-confirm', ['model' => $model]);

		}
		else {
			return $this->render("add",["model" => $model]);
		}
	}
}