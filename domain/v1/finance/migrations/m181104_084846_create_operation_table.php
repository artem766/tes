<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `operation_type`.
*/
class m181104_084846_create_operation_table extends Migration
{
	public $table = '{{%operation}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'operation_type_id' => $this->primaryKey(),
			'name' => $this->text(),
			'description' => $this->text(),
			'isForeign' => $this->boolean()->defaultValue(false),
		];

	}

	public function afterCreate()
	{
		
	}

}
