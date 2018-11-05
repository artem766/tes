<?php

namespace domain\v1\finance\models;

use yii\db\ActiveRecord;
use yii2lab\db\domain\behaviors\enum\EnumBehavior;

class Process extends ActiveRecord
{
	
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%process}}';
	}
	
//	public function behaviors()
//	{
//		return [
//			'rulesJson' => [
//				'class' => EnumBehavior::class,
//				'attributes' => ['synonyms'],
//			],
//		];
//	}
	
}
