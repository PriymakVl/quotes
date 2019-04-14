<?php

trait BookParam {

	public function addDataParam() {
		$params = self::selectParams(['title', 'id_author', 'description']);
		return $params;
	}

}