<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class OrganizationEntity
 * 
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $name
 */

class OrganizationEntity  extends BaseEntity
{
    protected $id;
    protected $name;
    protected $phone;
    protected $address;
}
