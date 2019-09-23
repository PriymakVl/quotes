<?php
class Controller_Author extends Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->view->pathFolder = './modules/author/views/';
		$this->message->section = 'author';
	}
	
    public function action_index()
	{
		$this->view->title = 'Автор';
	    $author = (new Author)->setData($this->get->id_author)->getBooks();
		$this->render('index/main', compact('author'));
	}

	public function action_list()
	{
		$count_on_page = 2;
		$obj = new Author();
		$authors = $obj->getList($count_on_page);
		$pagination = $obj->getPagination();
		$this->render('list/main', compact('authors', 'pagination'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		$author = (new Author)->addData()->setMessage('success', 'add');
		$this->redirect('author?id_author='.$author->id);
	}

	public function action_edit()
	{
		$author = (new Author)->setData($this->get->id_author);
		if (!$this->post->save) return $this->render('edit/main', compact('author'));
		$author->edit()->setMessage('success', 'edit');
		$this->redirect('author?id_author='.$author->id);
	}

	public function action_delete()
	{
		$author = (new Author)->getData($this->get->id_author);
		$author->delete()->setMessage('success', 'delete');
		$this->redirect('/author/list');
	}

	public function action_search()
	{
		debug();
		$authors = (new Author)->search();
		if (!$authors) return $this->setMessage('danger', 'search_error')->redirect('author/list');
		if (count($authors) == 1) return $this->setMessage('success', 'search_one')->redirect('author?id_author='.$authors[0]->id);
		$this->setMessage('success', 'search_many')->render('search/main', compact('terms'));
	}


}