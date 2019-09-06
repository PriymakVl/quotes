<?php

class Book extends Model {
	
	public $author;
	public $category;

	const STATE_NOT_READ = 1;
	const STATE_SPEED_READ = 2;
	const STATE_READ = 3;
	const STATE_AUDIO = 4;
	const STATE_OUTLINED = 5; //законспектирована
	
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
		$sql = 'INSERT INTO `books` (title, id_author, description, id_cat, rating) 
		VALUES (:title, :id_author, :description, :id_cat, :rating)';
		return self::insert($sql, $params);
	}

	public function edit()
	{
		$params = self::selectParams(['id_cat', 'title', 'id_author', 'id_book', 'description', 'state']);
		$sql = "UPDATE `books` SET `state` = :state, `id_cat` = :id_cat, `id_author` = :id_author, `title` = :title, `description` = :description WHERE `id` = :id_book";
		if (self::perform($sql, $params)) return $this;
	}
	
	public function getAuthor()
	{
		if ($this->id_author) $this->author = new Author($this->id_author);
		return $this;
	}
	
	public function getCategory()
	{
		if ($this->id_cat) $this->category = new Category($this->id_cat);
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

	public function convertState($state = null)
	{
		$state = $state ? $state : $this->state;
		switch ($state) {
			case self::STATE_NOT_READ: return 'не прочитана';
			case self::STATE_SPEED_READ: return 'просмотрена';
			case self::STATE_READ: return 'прочитана';
			case self::STATE_AUDIO: return 'прослушана';
			case self::STATE_OUTLINED: return 'законспектирована';
			default: return 'не известно';
		}
	}

	public function getBgState()
	{
		switch ($this->state) {
			case self::STATE_NOT_READ: return 'white';
			case self::STATE_SPEED_READ: return 'yellow';
			case self::STATE_READ: return 'orange';
			case self::STATE_AUDIO: return 'orange';
			case self::STATE_OUTLINED: return 'green';
			default: return 'red';
		}
	}

	public function addFile()
	{
		$filename = $this->saveFile();
		if (!$filename) throw new Exception('error upload file book');
		$this->updateFileName($filename);
		return $this;
	}

	public function updateFileName($filename)
	{
		$params = ['filename' => $filename, 'id_book' => $this->id];
		$sql = "UPDATE `books` SET `filename` = :filename WHERE `id` = :id_book";
		self::perform($sql, $params);
	}

	private function saveFile()
	{
		if(empty($_FILES) || $_FILES['file_book']['error'] != 0) return false;
		$filename = md5(microtime() . rand(0, 9999));
		$extension = explode('.', $_FILES['file_book']['name'])[1];
		$file = $filename.'.'.$extension;
		if (move_uploaded_file($_FILES['file_book']['tmp_name'], './web/books/'.$file)) return $file;
	}

	public function getForAuthor($id_author)
	{
		$params = ['id_author' => $id_author, 'status' => STATUS_ACTIVE];
		$sql = "SELECT * FROM `books` WHERE `id_author` = :id_author AND `status` = :status";
		return self::perform($sql, $params)->fetchAll();
	}
	
	
	
}