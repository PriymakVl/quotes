<?php

class Quote extends Model {
	
	use QuoteTotal, QuoteAddFile, QuoteMessage;
	
	public $favorite;
	public $random;
	public $category;
	public $author;
	public $book;
	
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
	
	public function getCategory()
	{
		if ($this->id_cat) $this->category = (new Category)->setData($this->id_cat);
		else $this->category = (object) ['name' => 'Без названия'];
		return $this;
	}
	
	public function getAuthor()
	{
		if ($this->id_author) $this->author = (new Author)->setData($this->id_author);
		return $this;
	}
	
	public function getBook()
	{
		if ($this->id_book) $this->book = (new Book)->setData($this->id_book);
		return $this;
	}
	
	public function edit()
	{
		$this->editModel();
		return $this;
	}
	
	




}