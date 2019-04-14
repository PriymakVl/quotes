<?php

trait AuthorParam {

	public function addDataParam() {
		$params['first_name'] = trim($this->post->first_name);
		$params['last_name'] = trim($this->post->last_name);
		$params['patronymic'] = trim($this->post->patronymic);
		$params['surname'] = trim($this->post->surname);
		$params['date_birth'] = $this->post->date_birth ? Date::convertStringToTime($this->post->date_birth) : '';
		return $params;
	}

}