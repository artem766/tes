<?php

namespace yii2woop\service\domain\v3\services;

use yii2lab\domain\behaviors\entity\CheckOwnerIdFilter;
use yii2lab\domain\behaviors\query\CurrentUserOnlyFilter;
use yii2lab\domain\services\base\BaseActiveService;
use yii2lab\extension\yii\helpers\ArrayHelper;
use yii2woop\service\domain\v3\entities\FavoriteEntity;
use yii2woop\service\domain\v3\entities\ServiceEntity;
use yii2woop\service\domain\v3\interfaces\services\FavoriteInterface;

class FavoriteService extends BaseActiveService implements FavoriteInterface {
	
	public function behaviors() {
		return [
			CurrentUserOnlyFilter::class, // выбирать только свои пункты
			CheckOwnerIdFilter::class, // если не своя сущность, то 403
		];
	}
	
	public function create($data) {
		/** @var FavoriteEntity $entity */
		$entity = $this->domain->factory->entity->create($this->id);
		$entity->load($data, [/*'title', */'service_id', 'values']);
		$this->validate($entity);
		if(isset($data['title'])) {
			$entity->title = $data['title'];
		}
		return $this->repository->insert($entity);
	}
	
	public function updateById($id, $data) {
		/** @var FavoriteEntity $entity */
		$entity = $this->oneById($id);
		if(!empty($data['values'])) {
			$data['values'] = ArrayHelper::merge($entity->values, $data['values']);
		}
		$entity->load($data, ['title', 'values']);
		$this->validate($entity);
		$this->repository->update($entity);
		return $entity;
	}
	
	private function validate(FavoriteEntity $entity) {
		$entity->values = \App::$domain->service->field->validate($entity->service_id, $entity->values);
		/** @var ServiceEntity $service */
		$service = \App::$domain->service->service->oneById($entity->service_id);
		if(empty($entity->title)) {
			$entity->title = $service->title;
		}
		$entity->validate();
		return $entity;
	}
	
}
