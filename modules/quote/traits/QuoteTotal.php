<?php

trait QuoteTotal  {
	
	use QuoteModel;
	
	public function getFavorites()
    {
        $items = (new Favorite)->getAll('favorites');
        if ($items) return $this->createArrayQuotes($items);
    }
	
	public function createArrayQuotes($items)
    {
        foreach ($items as $item) {
            $quote = (new Quote)->setData($item->id_quote);
            $objects[] = $quote;
        }
        return $objects;
    }
	
	public function getForCategory()
	{
		$items = $this->getAllByIdCategory();
		if ($items) return ObjectHelper::createArray($items, ['setData']);
	}
	
	

}