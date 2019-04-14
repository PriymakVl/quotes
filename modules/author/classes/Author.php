<?php

class Author extends Model {
	
	use AuthorParam;
	
	public function __construct($id = false)
	{
		$this->tableName = 'authors';
		parent::__construct($id);
		$this->message->section = 'author';
	}


	public function addData()
	{
		return new self($this->addDataModel());
	}
	
	public function addDataModel()
	{
		$params = $this->addDataParam();
		$sql = 'INSERT INTO `authors` (first_name, last_name, patronymic, surname, date_birth) VALUES (:first_name, :last_name, :patronymic, :surname, :date_birth)';
		return self::insert($sql, $params);
	}
	
	
}