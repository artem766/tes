<?php

namespace domain\v1\finance\models;

use yii\db\ActiveRecord;
use yii2lab\db\domain\behaviors\enum\EnumBehavior;

class Operation extends ActiveRecord
{
	
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%operation}}';
	}
	

}
