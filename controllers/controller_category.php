<?php
class Controller_Category extends Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->view->pathFolder = './modules/category/views/';
		$this->message->section = 'category';
		$this->view->title = 'Категория';
	}
	
    public function action_index()
	{
		$category = (new Category)->setData($this->get->id_cat)->getParent()->countQuotes()->countSubcategories();
		$this->render('index/main', compact('category'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		if ($this->post->id_parent) {
			$quotes = (new Quote)->getForCategory();
			if ($quotes) return $this->setMessage('error', 'empty_not', 'category')->redirect('quote/category?id_cat='.$this->post->id_parent);
		}
		$category = (new Category)->addData()->setMessage('success', 'add');
		$this->redirect('category?id_cat='.$category->id);
	}
	
	public function action_list()
	{
		$category = (new Category)->setData($this->get->id_cat)->getSubcategories();
		$this->render('list/main', compact('category'));
	}
	

}