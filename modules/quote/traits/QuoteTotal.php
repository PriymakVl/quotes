<?php

trait QuoteTotal  {
	
	use QuoteModel;
	
	public function getForCategory()
	{
		$items = $this->getAllByIdCategoryModel();
		if ($items) return ObjectHelper::createArray($items, 'Quote', ['setData']);
	}
	
	public function addData()
	{
		$id_quote = $this->addDataModel();
		return new self($id_quote);
	}
	
	

}