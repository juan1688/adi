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
			[["user_id","name","description"], "required"],
			[["user_id"], "integer"],
			[["description"], "string"],
			[["name"], "string", "max" => 255]
		];
	}

	public function attributeLabels()
	{
		return [
			"id"			=>	"ID",
			"user_id"		=>	"Usuario",
			"name"			=>	"Nombre",
			"description"	=>	"Descripción"
		];
	}
}