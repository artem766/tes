<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `document`.
*/
class m181104_063743_create_document_table extends Migration
{
	public $table = '{{%document}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'document_type_id' => $this->primaryKey(),
			'name' => $this->text(),
			'description' => $this->text(),
		];

	}

}
