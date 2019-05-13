<?php

trait QuoteTotal  {
	
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
	
	

}