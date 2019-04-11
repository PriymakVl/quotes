<?php

trait QuoteMessage {

	public function setAddFileMessage()
	{
		if(empty($_FILES) || $_FILES['file']['error'] != 0) return $this->setMessage('error', 'upload_file_not');
		else if (empty(file($_FILES['file']['tmp_name']))) return $this->setMessage('error', 'upload_file_empty');
		else return $this->setMessage('success', 'add_file');
	}
}