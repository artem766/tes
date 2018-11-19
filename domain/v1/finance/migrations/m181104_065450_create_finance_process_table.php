<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `process`.
*/
class m181104_065450_create_finance_process_table extends Migration
{
	public $table = '{{%finance_process}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
			'document_type_id' =>$this->integer()->notNull(),
			'operation_type_id' =>$this->integer()->notNull(),
            'organization_id' =>$this->integer(),
			'created_at' => $this->timestamp()->defaultValue('CURRENT_TIMESTAMP'),
		];

	}


}
