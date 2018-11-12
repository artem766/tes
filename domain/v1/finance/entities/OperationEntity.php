<?php

namespace domain\v1\finance\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class OperationEntity
 * 
 * @package domain\v1\finance\entities
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 */

class OperationEntity  extends BaseEntity
{
    protected $id;
    protected $name;
    protected $description;
    protected $isForeign = false;
    protected $isIncome = false;
}
