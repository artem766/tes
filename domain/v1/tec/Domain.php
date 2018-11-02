<?php

namespace yii2woop\service\domain\v3;

/**
 * Class Domain
 * 
 * @package yii2woop\service\domain\v3
 * @property-read \yii2woop\service\domain\v3\interfaces\services\CategoryInterface $category
 * @property-read \yii2woop\service\domain\v3\interfaces\services\FavoriteInterface $favorite
 * @property-read \yii2woop\service\domain\v3\interfaces\services\FieldInterface $field
 * @property-read \yii2woop\service\domain\v3\interfaces\services\ServiceInterface $service
 * @property-read \yii2woop\service\domain\v3\interfaces\repositories\RepositoriesInterface $repositories
 * @property-read \yii2woop\service\domain\v3\interfaces\services\BlacklistInterface $blacklist
 */
class Domain extends \yii2lab\domain\Domain {
	
	public function config() {
		return [
			'repositories' => [
				''
			],
			'services' => [

			],
		];
	}
	
}