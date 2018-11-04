<?php

namespace domain\v1\finance;

/**
 * Class Domain
 * 
 * @package domain\v1\finance\enums
 * @property-read \domain\v1\finance\enums\interfaces\services\ProcessInterface $service
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				'process',
				'documentType',

			],
			'services' => [
				'process',
				'document'
			],
		];
	}
	
}