<?php

trait BookList {

	public function getBooks()
	{
		$items = Book::getAll('bookrs');
		if ($items) return ObjectHelper::createArray($items, 'Book', ['setData', 'getAuthor', 'getCategory']);
	}


}