<?php

namespace yii2woop\service\domain\v3\models;

use yii\db\ActiveRecord;
use yii2lab\db\domain\behaviors\enum\EnumBehavior;

class Service extends ActiveRecord
{
	
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%service}}';
	}
	
	public function behaviors()
	{
		return [
			'rulesJson' => [
				'class' => EnumBehavior::class,
				'attributes' => ['synonyms'],
			],
		];
	}
	
}
