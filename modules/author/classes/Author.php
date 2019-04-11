<?php

class Author extends Model {
	
	public function __construct($id = false)
	{
		$this->tableName = 'authors';
		parent::__construct($id);
		$this->message->section = 'author';
	}


	public function addData()
	{
		$this->addDataModel();
		return $this;
	}
	
	public function addDataModel()
	{
		$params = self::selectParams(['first_name', 'last_name', 'patromn
	}
	
	
}