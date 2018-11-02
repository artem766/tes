<?php

namespace yii2woop\service\domain\v3\entities;

use yii\helpers\ArrayHelper;
use yii2lab\domain\BaseEntity;
use yii2lab\domain\helpers\Helper;

/**
 * Class FieldEntity
 *
 * @package yii2woop\service\domain\v3\entities
 *
 * @property integer $id
 * @property integer $service_id
 * @property string $title
 * @property string $name
 * @property integer $type
 * @property integer $sort
 * @property integer $hidden
 * @property integer $button
 * @property integer $readonly
 * @property string $mask
 * @property boolean $unmask
 * @property string $value
 * @property integer[] $steps
 * @property FieldTranslateEntity $translate
 * @property FieldTranslationEntity $translation
 * @property FieldValidationEntity[] $validations
 * @property FieldValueEntity[] $values
 * @property boolean $blacklist
 */
class FieldEntity extends BaseEntity {
	
	protected $id;
	protected $service_id;
	protected $name;
	protected $type;
	protected $sort;
	protected $hidden;
	protected $button;
	protected $readonly;
	protected $mask;
	protected $unmask;
	protected $value;
	protected $steps;
	protected $translate;
	protected $translation;
	protected $validations;
	protected $values;
	protected $blacklist;

	public function fieldType() {
		return [
			//'sort' => 'integer',
			'hidden' => 'boolean',
			'button' => 'boolean',
			'readonly' => 'boolean',
			'unmask' => 'boolean',
			
			'translate' => [
				'type' => FieldTranslateEntity::class,
				'isCollection' => true,
			],
			'validations' => [
				'type' => FieldValidationEntity::class,
				'isCollection' => true,
			],
			'values' => [
				'type' => FieldValueEntity::class,
				'isCollection' => true,
			],
		];
	}
	
	public function getTitle() {
		if(isset($this->translation)) {
			return $this->translation->value;
		}
		if(isset($this->translate)) {
			return $this->translate->value;
		}
		/*if(isset($this->name)) {
			return Inflector::titleize($this->name);
		}*/
		return null;
	}
	
	// todo: crutch for poly-morph relation
	public function setTranslate($value) {
		if(empty($value)) {
			return;
		}
		$translates = ArrayHelper::index($value, 'field_name');
		if(empty($translates) || empty($translates[$this->name])) {
			return;
		}
		$entity = $translates[$this->name];
		$this->translate = Helper::forgeEntity($entity, FieldTranslateEntity::class);
	}
	
	public function getIsNeedSend() {
		return empty($this->name == 'txn_id' || $this->name == 'button' || $this->name == 'capcha');
	}

	public function fields() {
		$fields = parent::fields();
		$fields['is_need_send'] = 'is_need_send';
		$fields['title'] = 'title';
		unset($fields['translate']);
		unset($fields['translation']);
		return $fields;
	}
}
