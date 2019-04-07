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
		$category = (new Quote)->setData($this->get->id_cat)->getParent();
		$this->render('category', compact('category'));
	}
	
	public function action_add()
	{
		if (!$this->post->save) return $this->render('add/main');
		$category = (new Category)->addData()->setMessage('success', 'add');
		$this->redirect('/category?id_cat='.$category->id);
	}
	

}