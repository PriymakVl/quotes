<?php

trait BookList {

	public function getList($limit)
	{
		$items = $this->selectBooks();
		$items = $this->getDataForPage($items, $limit);
		if ($items) return ObjectHelper::createArray($items, 'Book', ['setData', 'getAuthor', 'getCategory']);
	}

	public function selectBooks()
	{
		$sql = "SELECT * FROM `books` WHERE `status` = :status ORDER BY `rating` DESC";
		return self::perform($sql, ['status' => STATUS_ACTIVE])->fetchAll();
	}


}