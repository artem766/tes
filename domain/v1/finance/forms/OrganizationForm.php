<?php

namespace domain\v1\finance\forms;

use Yii;
use yii2lab\domain\base\Model;

class OrganizationForm extends Model
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
			'address' 		=> Yii::t('finance/document','address'),
			'phone' 		=> Yii::t('finance/document','phone'),
		];
	}
}