<?php
namespace application\models;

use PDO;

class Menu{

  protected $menu_db;

  public function __construct()
	{
		$config = [
    	'host' => 'localhost',
    	'name' => 'newworld_ultp',
    	'password' => 'Omg01Omg01',
    	'user' => 'newworld_ultp',
    ];
		$this->menu_db = new PDO('mysql:host='.$config['host'].';$menu_dbname='.$config['name'].';charset=utf8',$config['user'], $config['password']);
		$this->menu_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->menu_db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$this->menu_db->query('SET NAMES utf8');
		if($this->menu_db){
			//
		}else{
			echo '<h1>Cant connect to $menu_db</h1>';
		}
		// debug($this->$menu_db);
	}

  public function query($sql, $params = []){
    $state = $this->menu_db->prepare($sql);
    if(!empty($params)){
      foreach ($params as $key => $val) {
        $state->bindValue(':'.$key, $val);
      }
    }
    $state->execute();
    return $state;
  }

  public function insert_query($sql, $params = []){
    $state = $this->menu_db->prepare($sql)->execute($params);
    return $state;
  }

  public function select_query($sql, $category_id){
    $result = $this->menu_db->prepare($sql)->execute([$category_id]);
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

	public function getProducts(){
		$result = $this->menu_db->row('SELECT * FROM up_product WHERE available=1 LIMIT 10');
		return $result;
	}

}

 ?>
