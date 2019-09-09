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
		$this->render('index/main', compact('book'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		$book = (new Book)->addData()->setMessage('success', 'add');
		$this->redirect('book?id_book='.$book->id);
	}

	public function action_edit()
	{
		$book = (new Book)->setData($this->get->id_book);
		if (!$this->post->save) return $this->render('edit/main', compact('book'));
		$book->edit()->setMessage('success', 'edit');
		$this->redirect('book?id_book='.$book->id);
	}

	public function action_edit_rating()
	{
		(new Book)->setData($this->get->id_book)->setRating($this->get->rating)->setMessage('success', 'edit_rating');
		$this->redirectPrevious();
	}

	public function action_edit_state()
	{
		(new Book)->setData($this->get->id_book)->setState($this->get->state)->setMessage('success', 'edit_state');
		$this->redirectPrevious();
	}
	
	public function action_list()
	{
		$count_on_page = 10;
		$obj = new Book();
		$books = $obj->getList($count_on_page);
		$pagination = $obj->getPagination();
		$this->render('list/main', compact('books', 'pagination'));
	}

	public function action_upload_file()
	{
		(new Book)->setData($this->post->id_book)->addFile()->setMessage('success', 'upload_file');
		$this->redirectPrevious();
	}

	public function action_search()
	{
		$books = (new Book)->search();
		if (!$books) return $this->setMessage('danger', 'search_error')->redirect('book/list');
		if (count($books) == 1) return $this->setMessage('success', 'search_one')->redirect('book?id_book='.$books[0]->id);
		$this->setMessage('success', 'search_many')->render('search/main', compact('terms'));
	}


}