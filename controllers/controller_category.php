<?php
class Controller_Category extends Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->view->pathFolder = './modules/category/views/';
		$this->message->section = 'category';
	}
	
    public function action_index()
	{
		$category = (new Category)->setData($this->get->id_cat)->getParent();
		$this->render('category', compact('category'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		if ($this->get->id_cat) {
			$quotes = (new Quote)->getForCategory();
			if ($quotes) return $this->setMessage('error', 'empty_not', 'category');
		}
		$category = (new Category)->addData()->setMessage('success', 'add');
		$this->redirect('category?id_cat='.$category->id);
	}
	
	public function action_list()
	{
		$parent = (new Category)->setData($this->get->id_cat)->getSubcategories();
		$this->render('list/main', compact('parent'));
	}
	

}