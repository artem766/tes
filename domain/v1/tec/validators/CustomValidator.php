<?php

namespace yii2woop\service\domain\v3\validators;

use yii\validators\Validator;
use yii2lab\validator\helpers\IinParser;

class CustomValidator extends Validator
{
    public $method;
    
	public function method_iin_check($value)
	{
		return false; // надо реализовать
	}
	
	public function method_iin_match($value)
	{
		try {
			IinParser::parse($value);
			return false;
		} catch(\Exception $e) {
			return $e->getMessage();
		}
	}
    /**
     * {@inheritdoc}
     */
    protected function validateValue($value)
    {
    	$method = 'method_' . $this->method;
	    $error = $this->{$method}($value);
        if ($error) {
            return [$error];
        }
        return null;
    }

}
