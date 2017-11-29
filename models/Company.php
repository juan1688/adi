<?php

namespace app\models;

class Company extends \yii\db\ActiveRecord
{
	public static function tableName()
	{
		return "companies";
	}

	public function rules(){
		return [
			[["name","description"], "required"],
			[["description"], "string"],
			[["name"], "string", "max" => 255]
		];
	}

	public function attributeLabels()
	{
		return [
			"id"			=>	"ID",
			"name"			=>	"Nombre",
			"description"	=>	"Descripción"
		];
	}
}