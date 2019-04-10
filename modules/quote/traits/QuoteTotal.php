<?php

trait QuoteTotal  {
	
	use QuoteModel;
	
	public function getForCategory()
	{
		$items = $this->getAllByIdCategoryModel();
		debug($items);
		if ($items) return ObjectHelper::createArray($items, ['setData']);
	}
	
	public function addData()
	{
		$id_quote = $this->addDataModel();
		return new self($id_quote);
	}
	
	

}