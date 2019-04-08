<?php

trait QuoteModel {
	
	use QuoteParam;

//    public static function set($order_id, $state)
//    {
//        $params = ['order_id' => $order_id, 'date' => time(), 'state'=> $state];
//        $sql = "INSERT INTO `orders_states` (order_id, date, state) VALUES (:order_id, :date, :state)";
//        self::perform($sql, $params);
//    }

	public function getAllByIdCategory()
	{
		$params = self::selectParams(['id_cat', 'status']);
		$sql = "SELECT * FROM `quotes` WHERE `id_cat` = :id_cat AND `status` = :status";
		self::perform($sql, $params);
	}
	
	public function addDataModel()
	{
		$params = self::selectParams['id_cat', 'text', 'id_author'];
		$sql = "INSERT INTO `quotes` (id_cat, id_author, text) VALUES (:id_cat, :id_author, :text)";
		return insert($sql, $params);
	}
	
	public function editDataModel()
	{
		$params = self::selectParams['id_cat', 'text', 'id_author'];
		$sql = "UPDATE `quotes` SET `id_cat` = :id_cat, `id_author` = :id_author, `text` = :text WHERE `id` = :id_quote";
		return insert($sql, $params);
	}


}