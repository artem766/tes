<?php

namespace domain\v1\finance\forms;

use Yii;
use yii2lab\domain\base\Model;

class OperationForm extends Model
{

public $name;
public $description;
public $isForeign;

	public function rules()
	{
		return [
			[['name'], 'required'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'name' 		=> Yii::t('finance/operation','name'),
			'description' 		=> Yii::t('finance/operation','description'),
			'isForeign' 		=> Yii::t('finance/operation', 'isForeign'),
		];
	}
}