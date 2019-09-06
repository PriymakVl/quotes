<?php

class Author extends Model {
	
	use AuthorParam;

	public $books;
	
	public function __construct($id = false)
	{
		$this->tableName = 'authors';
		parent::__construct($id);
		$this->message->section = 'author';
	}


	public function addData()
	{
		return new self($this->addDataModel());
	}
	
	public function addDataModel()
	{
		$params = $this->addDataParam();
		$sql = 'INSERT INTO `authors` (first_name, last_name, patronymic, surname, date_birth) VALUES (:first_name, :last_name, :patronymic, :surname, :date_birth)';
		return self::insert($sql, $params);
	}

	public function edit()
	{
		$this->updateData();
		return $this;
	}

	public function updateData()
	{
		$params = self::selectParams(['first_name', 'last_name', 'patronymic', 'surname', 'date_birth', 'id_author']);
		$sql = "UPDATE `authors` SET `first_name` = :first_name, `last_name` = :last_name, `patronymic` = :patronymic, `surname` = :surname, `date_birth` = :date_birth WHERE `id` = :id_author";
		return self::perform($sql, $params);
	}

	public function getBooks()
	{
		$this->books = (new Book)->getForAuthor($this->id);
		return $this;
	}
	
	
}