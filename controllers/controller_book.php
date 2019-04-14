<?php
class Controller_Book extends Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->view->pathFolder = './modules/book/views/';
		$this->message->section = 'book';
	}
	
    public function action_index()
	{
	    $book = (new Book)->setData($this->get->id_book);
		$this->render('index', compact('book'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		$book = (new Author)->addData()->setMessage('success', 'add');
		$this->redirect('/book?id_book='.$book->id);
	}


}