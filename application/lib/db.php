<?php

namespace application\lib;

use PDO;

class Db{

	protected $db;

	public function __construct()
	{
		$config = require_once 'application/config/db.php';
		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].';charset=utf8',$config['user'], $config['password']);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$this->db->query('SET NAMES utf8');
		if($this->db){
			//
		}else{
			echo '<h1>Cant connect to DB</h1>';
		}
		// debug($this->db);
	}

	public function query($sql, $params = []){
		$state = $this->db->prepare($sql);
		if(!empty($params)){
			foreach ($params as $key => $val) {
				$state->bindValue(':'.$key, $val);
			}
		}
		$state->execute();
		return $state;
	}

	public function insert_query($sql, $params = []){
		$state = $this->db->prepare($sql)->execute($params);
		return $state;
	}

	public function select_query($sql, $category_id){
		$result = $this->db->prepare($sql)->execute([$category_id]);
		debug($result);
		// return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function row($sql, $params = []){
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []){
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}

}

 ?>
