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

}