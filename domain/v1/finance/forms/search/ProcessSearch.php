<?php

namespace domain\v1\finance\forms\search;

use DateInterval;
use DateTime;
use yii2lab\domain\base\Model;
use yii2lab\domain\data\Query;

class ProcessSearch extends Model {

	public $document;
	public $operation;
	public $organization;
	public $created_at;
	public $datetime_start;
	public $datetime_end;

	public function rules() {
		return [
			[['document', 'operation', 'organization', 'created_at', 'datetime_start', 'datetime_end',], 'safe'],
		];
	}

	public function ignoreAttributes() {
		return ['datetime_start', 'datetime_end', 'created_at'];
	}

	public function prepareQuery(Query $query) {
		if($this->datetime_start) {
			$query->andWhere(['>=', 'created_at', $this->convert($this->datetime_start)]);
		}

		if($this->datetime_end) {
			$query->andWhere(['<', 'created_at', $this->convert($this->datetime_end)]);
		}
		foreach($this->getAttributes() as $name => $value) {
			if(!in_array($name, $this->ignoreAttributes())) {
				if($value !== '') {
					$query->andWhere([$name => $value]);
				}
			}

		}
	}

	private function convert($datatime) {
		$date = new DateTime(str_replace('.', '-', $datatime));
		$date->add(new DateInterval('PT6H'));
		return $date->format(DATE_ATOM);
	}


}
