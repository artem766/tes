<?php

namespace yii2woop\service\domain\v3\traits\services;

trait BlacklistTrait
{
	
	public function enableById($id) {
		\App::$domain->service->blacklist->enable(self::BLACKLIST_TYPE, $id);
	}
	
	public function disableById($id) {
		\App::$domain->service->blacklist->disable(self::BLACKLIST_TYPE, $id);
	}
	
	public function isEnableById($id) {
		return \App::$domain->service->blacklist->isEnable(self::BLACKLIST_TYPE, $id);
	}
	
}
