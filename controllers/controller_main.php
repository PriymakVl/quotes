<?php

class Controller_Main extends Controller_Base {

    public function action_index()
	{

	    $favorites = (new Quote)->getFavorites();
		$categories = (new Category)->getMain();
		$this->render('main/index', compact('favorites', 'categories'));
	}

	public function action_404()
    {
        $this->render('main/404');
    }

}