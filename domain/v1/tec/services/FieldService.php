<?php

namespace yii2woop\service\domain\v3\services;

use yii2lab\domain\behaviors\query\QueryFilter;
use yii2lab\domain\data\Query;
use yii2lab\domain\services\base\BaseActiveService;
use yii2woop\service\domain\v3\behaviors\query\BlacklistFilter;
use yii2woop\service\domain\v3\entities\FieldEntity;
use yii2woop\service\domain\v3\enums\BlacklistTypeEnum;
use yii2woop\service\domain\v3\helpers\FieldHelper;
use yii2woop\service\domain\v3\helpers\ServicePermissionEnum;
use yii2woop\service\domain\v3\helpers\validate\DynamicValidateHelper;
use yii2woop\service\domain\v3\interfaces\services\FieldInterface;
use yii2woop\service\domain\v3\traits\services\BlacklistTrait;

/**
 * Class FieldService
 *
 * @package yii2woop\service\domain\v3\services
 *
 * @property \yii2woop\service\domain\v3\interfaces\repositories\FieldInterface $repository
 */
class FieldService extends BaseActiveService implements FieldInterface {
	
	use BlacklistTrait;
	
	const BLACKLIST_TYPE = BlacklistTypeEnum::FIELD;
	
	public function sort() {
		return [
			'attributes'=>[
				//'title',
				'name',
				'merchant',
			],
		];
	}
	
	public function behaviors() {
		return [
			[
				'class' => BlacklistFilter::class,
				'type' => BlacklistTypeEnum::FIELD,
				'attribute' => 'id',
				'allowOnly' => [ServicePermissionEnum::SERVICE_MANAGE],
			],
			[
				'class' => QueryFilter::class,
				'method' => 'addOrderBy',
				'params' => ['sort' => SORT_ASC],
			],
			[
				'class' => QueryFilter::class,
				'method' => 'with',
				'params' => 'translate',
			],
		];
	}
	
	public function allByServiceId($serviceId) {
		$query = $this->prepareQuery();
		$query->with(['translate', 'validations', 'values']);
		$query->where('service_id', $serviceId);
		return $this->all($query);
	}
	
	public function validate($serviceId, $body, $step = null) {
		/** @var FieldEntity[] $fields */
		$fields = $this->allByServiceIdWithRelations($serviceId, $step);
		return DynamicValidateHelper::validate($serviceId, $body, $fields);
	}
	
	public function allByServiceIdWithRelations($serviceId, $step = null, Query $query = null) {
		$query = FieldHelper::forgeQueryForValidation($query);
		$collection = $this->repository->allByServiceIdWithRelations($serviceId, $step, $query);
		return $collection;
	}
}
