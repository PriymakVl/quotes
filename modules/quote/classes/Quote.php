<?php

class Quote extends Model {
	
	use QuoteTotal;
	
	public function __construct($id = false)
	{
		$this->tableName = 'quotes';
		parent::__construct($id);
		$this->message->section = 'quote';
	}



}