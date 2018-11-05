<?php

namespace domain\v1\finance\forms;

use Yii;
use yii2lab\domain\base\Model;

class DocumentForm extends Model
{

public $name;
public $description;

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
			'name' 		=> Yii::t('finance/document','name'),
			'description' 		=> Yii::t('finance/document','description'),
		];
	}
}