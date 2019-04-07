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
		$this->redirect('/quote?id_quote='.$quote->id);
	}
	
	public function action_category()
	{
		$quotes = (new Quote)->getForCategory();
		$this->render('category', compact('quotes'));
	}


}