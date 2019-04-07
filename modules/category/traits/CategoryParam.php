<?php

trait CategoryParam {
	
	use Param;
	
	public function addDataParam() 
	{
		$params['id_parent'] = self::getParam('id_parent') ? self::getParam('id_parent') : 0;
		$params['name'] = trim(self::getParam('name'));
		return $params;
	}
			
}