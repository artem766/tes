<?php

namespace common\locators;

use yii\di\ServiceLocator;

/**
 * @property-read \yii2lab\notify\domain\Domain $notify
 * @property-read \yii2lab\navigation\domain\Domain $navigation
 * @property-read \yii2lab\rbac\domain\Domain $rbac
 * @property-read \yii2lab\app\domain\Domain $app
 * @property-read \yii2lab\geo\domain\Domain $geo
 * @property-read \yii2lab\rest\domain\Domain $rest
 * @property-read \yii2module\account\domain\v2\Domain $account
 * @property-read \yii2module\profile\domain\v2\Domain $profile
 * @property-read \yii2module\lang\domain\Domain $lang
 * @property-read \yii2module\vendor\domain\Domain $vendor
 * @property-read \yii2module\tool\domain\Domain $tool
 * @property-read \yii2module\encrypt\domain\Domain $encrypt
 * @property-read \yii2module\article\domain\Domain $article
 * @property-read \yii2module\guide\domain\Domain $guide
 * @property-read \yii2woop\operation\domain\v2\Domain $operation
 * @property-read \yii2woop\service\domain\v3\Domain $service
 * @property-read \yii2woop\history\domain\Domain $history
 * @property-read \yii2module\summary\domain\Domain $summary
 * @property-read \yii2woop\partner\domain\Domain $partner
 * @property-read \domain\v1\finance\Domain $finance
 */
class DomainLocator extends ServiceLocator {}
