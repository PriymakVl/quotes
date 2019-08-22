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
		$this->render('index/main', compact('quote'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		$cat = (new Category)->setData($this->post->id_cat)->getSubcategories();
		if ($cat->sub) return $this->setMessage('error', 'is_sub')->redirectPreviously();
		$quote = (new Quote)->addData()->setMessage('success', 'add');
		$this->redirect('quote?id_quote='.$quote->id);
	}

	public function action_list()
	{
		$list = (new Quote)->getAllQuotes();
		$this->render('list/main', compact('list'));
	}
	
	public function action_category()
	{
		$category = $this->get->id_cat ? (new Category)->setData($this->get->id_cat)->getSubcategories() : null;
		if ($category && $category->sub) return $this->redirect('category/list?id_cat='.$category->id);
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
		if (!$this->post->save) return $this->render('edit/main', compact('quote'));
		$quote->edit()->setMessage('success', 'edit');
		$this->redirectPreviously();
	}
	
	public function action_delete()
	{
		$quote = (new Quote)->setData($this->get->id_quote)->delete()->setMessage('success', 'delete');
		$this->redirect('/quotes');
	}

	public function action_search()
	{
		$quotes = (new Quote)->search();
		if (!$quotes) return $this->setMessage('error', 'search_error')->redirectPrevious();
		if (count($quotes) == 1) return $this->setMessage('success', 'search_one')->redirect('quote?id_quote='.$quotes[0]->id);
		$this->setMessage('success', 'search_many')->render('search/main', compact('terms'));
	}


}