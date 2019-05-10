<?php

class Book extends Model {
	
	public $author;
	public $category;
	
	use BookParam, BookList;
	
	public function __construct($id = false)
	{
		$this->tableName = 'books';
		parent::__construct($id);
		$this->message->section = 'book';
	}


	public function addData()
	{
		return new self($this->addDataModel());
	}
	
	public function addDataModel()
	{
		$params = $this->addDataParam();
		$sql = 'INSERT INTO `books` (title, id_author, description) VALUES (:title, :id_author, :description)';
		return self::insert($sql, $params);
	}
	
	public function getAuthor()
	{
		if ($this->id_author) $this->author = new Author($this->id_author);
		return $this;
	}
	
	public function getCategory()
	{
		if ($this->id_cat) $this->category = new Author($this->id_cat);
		return $this;
	}
	
	public function delete()
	{
		parent::delete();
		$quotes = (new Quote)->getByIdBookModel($this->id);
		foreach ($quotes as $quote) {
			(new Quote)->updateIdBookModel(0);
		}
	}
	
	
}