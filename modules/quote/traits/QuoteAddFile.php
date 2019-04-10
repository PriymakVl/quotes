<?php

trait QuoteAddFile {
	
	public function addFile()
	{			
		if(empty($_FILES) || $_FILES['file']['error'] != 0) return $this;
		$items = file($_FILES['file']['tmp_name']);
		if (!$items) return $this;
		$quotes = $this->setCharset($items);
		return $this->addQuotes($quotes);
	}
	
	private function setCharset($items)
	{
		foreach ($items as $item) {
			$quotes[] = mb_convert_encoding($item, "UTF-8", "CP1251");
		}
		return $quotes;
	}
	
	private function addQuotes()
	{
		$params = self::selectParams(['id_author', 'id_cat', 'id_book']);
		foreach ($quotes as $quote) {
			$params['text'] = $quote;
			$this->addDataModel($params);
		}
		return $this;
	}
	

}