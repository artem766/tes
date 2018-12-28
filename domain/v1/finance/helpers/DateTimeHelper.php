<?php

namespace domain\v1\finance\helpers;

use DateInterval;
use DateTime;

class DateTimeHelper {

	public static  function convert($datatime) {
		$date = new DateTime(str_replace('.', '-', $datatime));
		$date->add(new DateInterval('PT6H'));
		return $date->format(DATE_ATOM);
	}
	public static  function getMonth($date) {
		$date = new DateTime($date);
		$date->format('m');
		prr($date->date,1,1);
		return date("F", strtotime($date->date));
	}
}