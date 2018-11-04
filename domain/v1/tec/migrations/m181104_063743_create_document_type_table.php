<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `document`.
*/
class m181104_063743_create_document_type_table extends Migration
{
	public $table = '{{%document_type}}';

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

}
