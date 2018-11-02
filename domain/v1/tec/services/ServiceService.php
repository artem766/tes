<?php

namespace yii2woop\service\domain\v3\services;

use yii2lab\applicationTemplate\common\enums\ApplicationPermissionEnum;
use yii2lab\domain\behaviors\entity\HideAttributeFilter;
use yii2lab\domain\behaviors\query\NullsLastOrderFilter;
use yii2lab\domain\data\Query;
use yii2lab\domain\services\base\BaseActiveService;
use yii2woop\service\domain\v3\behaviors\query\BlacklistFilter;
use yii2woop\service\domain\v3\behaviors\query\ServiceCategoryFilter;
use yii2woop\service\domain\v3\behaviors\query\ServiceTopFilter;
use yii2woop\service\domain\v3\behaviors\query\ServiceWithFieldsFilter;
use yii2woop\service\domain\v3\behaviors\query\ServiceLocaleFilter;
use yii2woop\service\domain\v3\behaviors\query\ServiceStatusFilter;
use yii2woop\service\domain\v3\behaviors\query\ServiceSortFilter;
use yii2woop\service\domain\v3\enums\BlacklistTypeEnum;
use yii2woop\service\domain\v3\helpers\ServicePermissionEnum;
use yii2woop\service\domain\v3\interfaces\services\ServiceInterface;
use yii2woop\service\domain\v3\traits\services\BlacklistTrait;

/**
 * Class ServiceService
 *
 * @package yii2woop\service\domain\v3\services
 *
 * @property \yii2woop\service\domain\v3\Domain $domain
 * @property \yii2woop\service\domain\v3\interfaces\repositories\ServiceInterface $repository
 */
class ServiceService extends BaseActiveService implements ServiceInterface {
	
	use BlacklistTrait;
	
	const BLACKLIST_TYPE = BlacklistTypeEnum::SERVICE;
	
	public function sort() {
		return [
			'attributes'=>[
				'title',
				'name',
				'merchant',
			],
		];
	}
	
	public function behaviors() {
		return [
			ServiceTopFilter::class,
			[
				'class' => BlacklistFilter::class,
				'type' => BlacklistTypeEnum::SERVICE,
				'attribute' => 'id',
				'allowOnly' => [ServicePermissionEnum::SERVICE_MANAGE],
			],
			ServiceWithFieldsFilter::class, // костыль для определения is_simple в сущности
			ServiceSortFilter::class,
			ServiceStatusFilter::class,
			ServiceCategoryFilter::class,
			ServiceLocaleFilter::class,
			[
				'class' => NullsLastOrderFilter::class,
				'attribute' => 'priority',
			],
			[
				'class' => HideAttributeFilter::class,
				'secureAttributes' => [
					'merchant',
				],
				'allowOnly' => [ApplicationPermissionEnum::BACKEND_ALL],
			],
		];
	}
	
	public function oneByIdForPayment($id, Query $query = null) {
		$query = Query::forge($query);
		$query->with(['fields', 'fields.validations']);
		$serviceEntity = $this->repository->oneById($id, $query);
		$this->checkServiceStatus($serviceEntity);
		return $serviceEntity;
	}
	
	public function getServiceInfo($body)
    {
        return $this->repository->getServiceInfo($body);
    }

    public function checkServiceStatus($service)
    {
        return $this->repository->checkServiceStatus($service);
    }

    public function getServiceListForPartner($serviceIds)
    {
        return $this->repository->getServiceListForPartner($serviceIds);
    }


	
	public function allByCategoryId($id, Query $query = null) {
		$query = Query::forge($query);
		$query->andWhere(['category_id' => $id]);
		return $this->all($query);
	}
	
}
