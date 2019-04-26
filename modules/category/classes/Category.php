<?php

class Category extends CategoryBase {
	
	use CategoryModel;
	
	public $parent;
	
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
	
	public function getMain()
	{
		$items = $this->getMainModel();
		if($items) return ObjectHelper::createArray($items, 'Category', ['setData']);
	}



}