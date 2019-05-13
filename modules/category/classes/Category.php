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
	
	public function getSubcategories()
	{
		$items = $this->getSubcategoriesModel();
		if ($items) $this->sub = ObjectHelper::createArray($items, 'Category', ['setData']);
		return $this;
	}
	
	public function countQuotes()
	{
		$quotes = (new Quote)->getByIdCategoryModel($this->id);
		if ($quotes) $this->qtyQuotes = count($quotes);
		return $this;
	}
	
	public function countSubcategories()
	{
		if (!$this->sub) $this->getSubcategories();
		if ($this->sub) $this->qtySub = count($this->sub);
		return $this;
	}



}