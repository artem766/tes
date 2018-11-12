<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `finance_balance`.
*/
class m181112_125538_create_user_balance_table extends Migration
{
	public $table = '{{%user_balance}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'user_id' => $this->integer(),
            'amount' => $this->double(),
		];

	}

	public function afterCreate()
	{
		
	}

}
