<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `finance_transfers`.
*/
class m181112_125611_create_finance_transfer_table extends Migration
{
	public $table = '{{%finance_transfer}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
            'process_id' => $this->integer(),
		];

	}

	public function afterCreate()
	{
		
	}

}
