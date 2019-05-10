<?php

trait BookList {

	public function getBooks()
	{
		$items = Book::getAll('books');
		if ($items) return ObjectHelper::createArray($items, 'Book', ['setData', 'getAuthor', 'getCategory']);
	}


}