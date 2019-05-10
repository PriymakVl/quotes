<?php
class Controller_Book extends Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->view->pathFolder = './modules/book/views/';
		$this->message->section = 'book';
		$this->view->title = 'Книги';
	}
	
    public function action_index()
	{
	    $book = (new Book)->setData($this->get->id_book)->getCategory()->getAuthor();
		// debug($book);
		$this->render('index/main', compact('book'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		$book = (new Book)->addData()->setMessage('success', 'add');
		$this->redirect('book?id_book='.$book->id);
	}
	
	public function action_list()
	{
		$books = (new Book)->getBooks();
		$this->render('list/main', compact('books'));
	}


}