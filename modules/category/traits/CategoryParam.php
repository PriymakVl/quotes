<?php

trait CategoryParam {
	
	use Param;
	
	public function addDataParam() 
	{
		$params['id_parent'] = self::getParam('id_cat') ? self::getParam('id_cat') : 0;
		$params['name'] = trim(self::getParam('name'));
		return $params;
	}
			
}