<?php

trait QuoteModel {
	
	use QuoteParam;

	public function getAllByIdCategory()
	{
		$params = self::selectParams(['id_cat', 'status']);
		$sql = "SELECT * FROM `quotes` WHERE `id_cat` = :id_cat AND `status` = :status";
		self::perform($sql, $params);
	}
	
	public function addDataModel()
	{
		$params = self::selectParams(['id_cat', 'text', 'id_author']);
		$sql = "INSERT INTO `quotes` (id_cat, id_author, text) VALUES (:id_cat, :id_author, :text)";
		return self::insert($sql, $params);
	}
	
	public function editDataModel()
	{
		$params = self::selectParams(['id_cat', 'text', 'id_author', 'id_book']);
		$sql = "UPDATE `quotes` SET `id_cat` = :id_cat, `id_author` = :id_author, `text` = :text, `id_book` = :id_book WHERE `id` = :id_quote";
		return insert($sql, $params);
	}


}