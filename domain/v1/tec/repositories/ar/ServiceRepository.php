<?php

namespace yii2woop\service\domain\v3\repositories\ar;

use yii\web\NotFoundHttpException;
use yii2lab\domain\data\Query;
use yii2lab\extension\activeRecord\repositories\base\BaseActiveArRepository;
use yii2woop\common\domain\account\v2\entities\LoginEntity;
use yii2woop\generated\enums\ServicesStatus;
use yii2woop\generated\exception\tps\ServiceNotAvailableForSubjectException;
use yii2woop\generated\transport\TpsCommands;
use yii2woop\service\domain\v3\interfaces\repositories\ServiceInterface;

/**
 * Class ServiceRepository
 *
 * @package yii2woop\service\domain\v3\repositories\ar
 *
 * @property \yii2woop\service\domain\v3\Domain $domain
 */
class ServiceRepository extends BaseActiveArRepository implements ServiceInterface {

	protected $modelClass = 'yii2woop\service\domain\v3\models\Service';
	protected $schemaClass = true;

	/**
	 * @inheritdoc
	 */
	public function tableName()
	{
		return 'service';
	}
	
	public function fieldAlias() {
		return [
			'id' => 'service_id',
			'description' => 'title',
			'title' => 'name',
			'name' => 'service_name',
			'updated_at' => 'modify_date',
		];
	}
	
	public function getServiceInfo($serviceId) {
        $query = Query::forge();
        $query->with(['fields', 'fields.validations']);
        $serviceEntity = $this->oneById($serviceId, $query);
		$this->checkServiceStatus($serviceEntity);
        return $serviceEntity;
    }

    public function checkServiceStatus($service) {
        $listAvailableServices = \App::$domain->operation->service->getAvailable();
        $listAvailableServicesIds = [];
        if(!empty($listAvailableServices)) {
            foreach($listAvailableServices as $availableService) {
                array_push($listAvailableServicesIds, $availableService['id']);
            }
            if(!in_array($service->id, $listAvailableServicesIds)) {
                throw new ServiceNotAvailableForSubjectException($service->title . ' not_available_for_subject');
            }
        }
        if($service->status == ServicesStatus::MODERATING) {
            throw new ServiceNotAvailableForSubjectException($service->title . ' service_on_moderating');
        }
        if($service->status == ServicesStatus::DELETED) {
            throw new ServiceNotAvailableForSubjectException($service->title . ' service_deleted');
        }
        if(!($service->status == ServicesStatus::MODERATED || $service->status == ServicesStatus::HIDDEN_FOR_WSDL)) {
            throw new ServiceNotAvailableForSubjectException($service->title . ' service_turn_off');
        }
        return true;
    }

    public function getServiceListForPartner($serviceIds) {
        $servicesList = [];
        $query = new Query();
        $query->where('id', $serviceIds);
        $services = \App::$domain->service->service->all($query);
        if(empty($services)) {
            return null;
        }
        foreach($services as $service) {
            array_push($servicesList, [
                'id' => $service->id,
                'title' => $service->title,
                'description' => $service->description,
            ]);
        }
        return $servicesList;
    }


}