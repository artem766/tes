<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `operation_type`.
*/
class m181104_084846_create_operation_type_table extends Migration
{
	public $table = '{{%operation_type}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
			'name' => $this->text(),
			'description' => $this->text(),
		];

	}

	public function afterCreate()
	{
		
	}

}
