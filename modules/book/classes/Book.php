<?php

class Book extends Model {
	
	use BookParam;
	
	public function __construct($id = false)
	{
		$this->tableName = 'books';
		parent::__construct($id);
		$this->message->section = 'book';
	}


	public function addData()
	{
		return new self($this->addDataModel());
	}
	
	public function addDataModel()
	{
		$params = $this->addDataParam();
		$sql = 'INSERT INTO `books` (title, id_author, description) VALUES (:title, :id_author, :description)';
		return self::insert($sql, $params);
	}
	
	
}