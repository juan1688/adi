<?php

namespace app\models;

class Brand extends \yii\db\ActiveRecord
{
	public static function tableName()
	{
		return "brands";
	}

	public function rules(){
		return [
			[["name","description"], "required"],
			[["parent_id"], "integer"],
			[["description"], "string"],
			[["name"], "string", "max" => 255]
		];
	}

}