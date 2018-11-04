<?php

namespace domain\v1\finance\enums\entities;

use yii2lab\domain\BaseEntity;
use yii2lab\domain\values\TimeValue;
use yii2module\lang\domain\helpers\LangHelper;
use domain\v1\finance\enums\enums\SummaryEnum;
use domain\v1\finance\enums\helpers\PictureHelper;
use domain\v1\finance\enums\helpers\ServiceHelper;

/**
 * Class ServiceEntity
 *
 * @package domain\v1\finance\enums\entities
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent_id
 * @property string $title
 * @property string $description
 * @property string $description_company
 * @property string $commission_info
 * @property string $picture
 * @property string[] $synonyms
 * @property string $merchant
 * @property $type
 * @property integer $status
 * @property boolean $is_simple
 * @property integer $priority
 * @property string $template
 * @property string $updated_at
 * @property FieldEntity[] $fields
 * @property CategoryEntity[] $categories
 * @property ServiceEntity $parent
 * @property ServiceEntity[] $children
 * @property-read string $picture_url
 * @property-read boolean $blacklist
 */
class ServiceEntity extends BaseEntity {

	protected $id;
	protected $name;
	protected $parent_id;
	protected $title;
	protected $description;
	protected $description_company;
	protected $commission_info;
	protected $picture;
	protected $synonyms;
	protected $merchant;
	protected $type;
	protected $status;
	protected $template;
	protected $is_simple;
	protected $priority;
	protected $updated_at;
	protected $fields;
	protected $categories;
	protected $children;
	protected $parent;
	protected $blacklist = false;
	
	public function fieldType() {
		return [
			'id' => 'integer',
			'priority' => 'integer',
			'updated_at' => TimeValue::class,
			'fields' => [
				'type' => FieldEntity::class,
				'isCollection' => true,
			],
			'categories' => [
				'type' => CategoryEntity::class,
				'isCollection' => true,
			],
		];
	}
	
	public static function labels() {
		return LangHelper::extractList([
			'id' => ['main', 'id'],
			'name' => ['main', 'name'],
			'parent_id' => ['service/service', 'parent_id'],
			'title' => ['service/service', 'title'],
			'description' => ['main', 'description'],
			'description_company' => ['service/service', 'description_company'],
			'commission_info' => ['service/service', 'commission_info'],
			'picture' => ['main', 'picture'],
			'synonyms' => ['service/service', 'synonyms'],
			'merchant' => ['service/service', 'merchant'],
			'type' => ['main', 'type'],
			'status' => ['main', 'status'],
			'template' => ['service/service', 'template'],
			'is_simple' => ['service/service', 'is_simple'],
			'priority' => ['main', 'priority'],
			'updated_at' => ['main', 'updated_at'],
			'fields' => ['service/field', 'title'],
			'categories' => ['service/category', 'title'],
			'children' => ['service/service', 'children'],
			'parent' => ['service/service', 'parent'],
		]);
	}
	
	public function rules()
	{
		return [
			['parent_id', 'integer'],
		];
	}
	
	public function getIsSimple() {
		if(isset($this->is_simple)) {
			return $this->is_simple;
		}
		$isSimpleByButton = ServiceHelper::isSimpleService($this);
		return $isSimpleByButton;
	}
	
	public function getPicture() {
		return PictureHelper::renameExt($this->picture);
	}

	public function getPictureUrl() {
		return PictureHelper::url($this->picture, SummaryEnum::SERVICE_PICTURES_URL);
	}
	
	public function getTemplate() {
		if($this->template) {
			return $this->template;
		}
		return ServiceHelper::getTemplate($this);
	}
	
	public function fields() {
		$fields = parent::fields();
		$fields['picture_url'] = 'picture_url';
		return $fields;
	}
}
