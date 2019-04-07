<?php

trait CategoryModel {
	
	use CategoryParam;
	
	public function getMain()
	{
		$params = ['status' => STATUS_ACTIVE, 'id_parent' => self::ID_PARENT_MAIN_CATEGORY];
		$sql = "SELECT * FROM `categories` WHERE `id_parent` = :id_parent AND `status` = :status";
		return self::perform($sql, $params)->fetchAll();
	}
	
	public function addDataModel()
	{
		$params = $this->addDataParam();
		$sql = 'INSERT INTO `categories` (name, id_parent) VALUES (:name, :id_parent)';
		return self::insert($sql, $params);
	}

}