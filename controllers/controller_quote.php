<?php
class Controller_Quote extends Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->view->pathFolder = './modules/quote/views/';
		$this->message->section = 'quote';
	}
	
    public function action_index()
	{
	    $quote = (new Quote)->setData($this->get->id_quote);
		$this->render('index', compact('quote'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		$quote = (new Quote)->addData()->setMessage('success', 'add');
		$this->redirect('/quotes?id_quote='.$quote->id);
	}
	
	public function action_category()
	{
		$category = new Category($this->get->id_cat);
		$quotes = (new Quote)->getForCategory();
		$this->render('category/main', compact('quotes', 'category'));
	}
	
	public function action_add_file()
	{
		if (!$this->post->save) return $this->render('add_file/main');
		(new Quote)->addFile()->setAddFileMessage();
		$this->redirect('/quotes');
	}


}