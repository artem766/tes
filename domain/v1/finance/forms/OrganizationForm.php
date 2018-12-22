<?php

namespace domain\v1\finance\forms;

use Yii;
use yii2lab\domain\base\Model;

class OrganizationForm extends Model
{

    public $name;
    public $address;
    public $phone;
    public $occupation;
    public function rules()
    {
        return [
            [['name', 'phone', 'address'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('finance/organization', 'name'),
            'address' => Yii::t('finance/organization', 'address'),
            'phone' => Yii::t('finance/organization', 'phone'),
            'occupation' => Yii::t('finance/organization', 'occupation'),
        ];
    }
}