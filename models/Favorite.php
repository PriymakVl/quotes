<?php
require_once ('./core/model.php');

class Favorite extends Model {

	
	public function __construct($id = false)
	{
		$this->tableName = 'favorites';
		parent::__construct($id);
		$this->message->section = 'favorite';
	}
	
	
//    public static function set($order_id, $state)
//    {
//        $params = ['order_id' => $order_id, 'date' => time(), 'state'=> $state];
//        $sql = "INSERT INTO `orders_states` (order_id, date, state) VALUES (:order_id, :date, :state)";
//        self::perform($sql, $params);
//    }

}