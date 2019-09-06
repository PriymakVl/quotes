<?php

trait BookParam {

	public function addDataParam() {
		$params = self::selectParams(['title', 'id_author', 'description', 'rating', 'id_cat', 'state']);
		if (empty($params['rating'])) $params['rating'] = 1;
		if (empty($params['id_cat'])) $params['id_cat'] = Category::CATEGORY_NOT;
		return $params;
	}

}