<?php

class Quote extends Model {
	
	use QuoteTotal;
	
	public $favorite;
	public $random;
	
	public function __construct($id = false)
	{
		$this->tableName = 'quotes';
		parent::__construct($id);
		$this->message->section = 'quote';
	}
	
	public function getFavorite()
	{
		$id_quote = (new Favorite)->get();
		if ($id_quote) $this->favorite = new self($id_quote);
		return $this;
	}
	
	public function getRandom()
	{
		$random = array_unique(ArrayHelper::getRandom(4, 1, self::getLastId('quotes')));
		foreach ($random as $id_quote) {
			$this->random[] = new self($id_quote);
		}
		return $this;
	}
	




}