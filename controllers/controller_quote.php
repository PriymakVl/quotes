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
	    $quote = (new Quote)->setData($this->get->id_quote)->getCategory()->getAuthor()->getBook();
		// debug($quote->category);
		$this->render('index/main', compact('quote'));
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
	
	public function action_edit_rating()
	{
		$quote = (new Quote)->setData($this->get->id_quote)->setRating($this->get->rating)->setMessage('success', 'edit_rating');
		$this->redirect('/quotes/quote/category?id_cat='.$this->get->id_cat.'&id_active='.$quote->id);
	}
	
	public function action_edit()
	{
		$quote = (new Quote)->setData($this->get->id_quote);
		if (!$this->post->save) $this->render('edit/main', compact('quote'));
		$quote->edit()->setMessage('success', 'edit');
		$this->redirectPreviously();
	}
	
	public function action_delete()
	{
		$quote = (new Quote)->setData($this->get->id_quote)->delete()->setMessage('success', 'delete');
		$this->redirect('/quotes');
	}


}