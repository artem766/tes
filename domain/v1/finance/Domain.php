<?php

namespace domain\v1\finance;

/**
 * Class Domain
 * 
 * @package domain\v1\finance\enums
 * @property-read \domain\v1\finance\interfaces\services\ProcessInterface $process
 * @property-read \domain\v1\finance\interfaces\services\DocumentInterface $document
 * @property-read \domain\v1\finance\interfaces\services\OperationInterface $operation
 * @property-read \domain\v1\finance\interfaces\services\OrganizationInterface $organization
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'process',
				'document',
				'operation',
                'organization',
			],
			'services' => [
				'process',
				'document',
				'operation',
                'organization',
			],
		];
	}
	
}