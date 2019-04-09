<?php

class Controller_Main extends Controller_Base {

    public function action_index()
	{

	    $quote = (new Quote)->getFavorite()->getRandom(4);
		$categories = (new Category)->getMain();
		$this->render('main/index', compact('quote', 'categories'));
	}

	public function action_404()
    {
        $this->render('main/404');
    }

}