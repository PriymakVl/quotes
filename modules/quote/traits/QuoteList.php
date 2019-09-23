<?php

trait QuoteList  {
	
	use QuoteModel;
	
	public function getForCategory()
	{
		$items = $this->getByIdCategoryModel();
		if ($items) return ObjectHelper::createArray($items, 'Quote', ['setData']);
	}
	
	public function addData()
	{
		$id_quote = $this->addDataModel();
		return new self($id_quote);
	}

	public function getList($limit = null)
	{
		$items = $this->selectAll();
		if (!$limit) return $items;
		return $this->getDataForPage($items, $limit);
	}
	
	

}