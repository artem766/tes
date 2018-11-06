<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `operation_type`.
*/
class m181104_084846_create_finance_operation_table extends Migration
{
	public $table = '{{%finance_operation}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
			'name' => $this->text(),
			'description' => $this->text(),
			'is_foreign' => $this->boolean()->defaultValue(false),
		];

	}

	public function afterCreate()
	{
		
	}

}
