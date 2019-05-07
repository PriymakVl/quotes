<?php

class Controller_Main extends Controller_Base {

    public function action_index()
	{
	    $quotes = (new Quote)->getFavorite()->getRandom(4);
		$categories = (new Category)->getMain();
		$this->render('main/index', compact('quotes', 'categories'));
	}

	public function action_404()
    {
        $this->render('main/404');
    }

}