<?php

namespace yii2woop\service\domain\v3\services;

use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii2woop\service\domain\v3\entities\BlacklistEntity;
use yii2woop\service\domain\v3\interfaces\services\BlacklistInterface;
use yii2lab\domain\services\base\BaseActiveService;

/**
 * Class BlacklistService
 * 
 * @package yii2woop\service\domain\v3\services
 * 
 * @property-read \yii2woop\service\domain\v3\Domain $domain
 * @property-read \yii2woop\service\domain\v3\interfaces\repositories\BlacklistInterface $repository
 */
class BlacklistService extends BaseActiveService implements BlacklistInterface {

	public function idsByType($type) {
		$collection = $this->repository->allByType($type);
		return ArrayHelper::getColumn($collection, 'item_id');
	}
	
	public function isEnable($type, $id) {
		try {
			$this->repository->oneByParams($type, $id);
			return false;
		} catch(NotFoundHttpException $e) {
			return true;
		}
	}
	
	public function enable($type, $id) {
		$entity = $this->repository->oneByParams($type, $id);
		$this->repository->delete($entity);
	}
	
	public function disable($type, $id) {
		$entity = new BlacklistEntity();
		$entity->item_type = $type;
		$entity->item_id = $id;
		$this->create($entity);
	}
	
}
