<?php

class Category extends CategoryBase {
	
	use CategoryModel;
	
	public $parent;
	
	public function __construct($id = false)
	{
		parent::__construct($id);
		$this->tableName = 'categories';
		$this->message->section = 'category';
	}
	
	public function addData()
	{
		$id_cat = $this->addDataModel();
		return (new self)->setData($id_cat);
	}
	
	public function getParent()
	{
		if ($this->id_parent) $this->parent = (new self)->setData($this->id_parent);
		return $this;
	}



}