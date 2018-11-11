<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `organization`.
*/
class m181111_182133_create_finance_organization_table extends Migration
{
	public $table = '{{%finance_organization}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
            'name' => $this->text(),
            'address' => $this->text(),
            'phone' => $this->text(),
		];

	}

	public function afterCreate()
	{
		
	}

}
