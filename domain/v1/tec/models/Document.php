<?php

namespace domain\v1\finance\enums\models;

use yii\db\ActiveRecord;
use yii2lab\db\domain\behaviors\enum\EnumBehavior;

class Document extends ActiveRecord
{
	
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%document_type}}';
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
