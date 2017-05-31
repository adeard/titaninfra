<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     ServiceModule
 */

namespace Service\Model;


class FunctionTable
{
	public function formatCurrency($currency)
	{
		$result = number_format($currency,0,',','.');
		return $result;
	}
	
}
