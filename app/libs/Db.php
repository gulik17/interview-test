<?php

namespace app\libs;

use PDO;

class Db
{

	protected $db;
	
    public function __construct()
    {
		$config = require 'app/config/db.php';
		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
	}

    public function query($sql, $params = [])
    {
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		return $stmt;
    }
    
    public function insert($sql, $params = [])
    {
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return true;
        } catch (PDOException $e) {
            return false;
            //die('Unable to open database connection');
        }
	}

    public function row($sql, $params = [])
    {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

    public function column($sql, $params = [])
    {
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}

}
