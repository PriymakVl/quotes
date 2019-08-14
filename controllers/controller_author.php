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
	    $author = (new Author)->setData($this->get->id_author);
		$this->render('index/main', compact('author'));
	}

	public function action_list()
	{
		$authors = (new Author)->getAll('authors');
		$this->render('list/main', compact('authors'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		$author = (new Author)->addData()->setMessage('success', 'add');
		$this->redirect('/author?id_author='.$author->id);
	}


}