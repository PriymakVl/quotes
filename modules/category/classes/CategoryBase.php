<?php

class CategoryBase extends Model {
	
	const ID_PARENT_MAIN_CATEGORY = 0;
	
	public function __construct($id = false)
	{
		$this->tableName = 'categories';
		parent::__construct($id);
		$this->message->section = 'category';
	}



}