<?php

namespace domain\v1\finance;

/**
 * Class Domain
 * 
 * @package domain\v1\finance\enums
 * @property-read \domain\v1\finance\interfaces\services\ProcessInterface $service
 * @property-read \domain\v1\finance\interfaces\services\DocumentInterface $documentType
 * @property-read \domain\v1\finance\interfaces\services\OperationInterface $operationType
 * @property-read \domain\v1\finance\interfaces\services\ProcessInterface $process
 * @property-read \domain\v1\finance\interfaces\repositories\RepositoriesInterface $repositories
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'process',
				'document',
				'operation',
			],
			'services' => [
				'process',
				'document',
				'operation'
			],
		];
	}
	
}