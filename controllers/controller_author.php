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
	    $author = (new Author)->setData($this->get->id_author);
		$this->render('index', compact('author'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		$author = (new Author)->addData()->setMessage('success', 'add');
		$this->redirect('/quotes?id_author='.$author->id);
	}


}