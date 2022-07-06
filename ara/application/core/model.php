<?php

Abstract Class Model_Base {

	protected $db;
	protected $table;
	private $dataResult;
	
	public function __construct($select = false) {
		// объект бд коннекта
		global $dbObject;
		$this->db = $dbObject;
		
		// имя таблицы
		$modelName = get_class($this);
		$arrExp = explode('_', $modelName);
		$tableName = strtolower($arrExp[1]);
		$this->table = $tableName;
		
		// обработка запроса, если нужно
		$sql = $this->_getSelect($select);	
		if($sql) $this->_getResult("SELECT * FROM $this->table" . $sql);
	}	
	
	public function getTableName() {
		return $this->table;
	}
	
	function getAllRows(){
		if(!isset($this->dataResult) OR empty($this->dataResult)) return false;
		return $this->dataResult;
	}
	
	function getOneRow(){
		if(!isset($this->dataResult) OR empty($this->dataResult)) return false;
		return $this->dataResult[0];
	}	
	
	function fetchOne(){
		if(!isset($this->dataResult) OR empty($this->dataResult)) return false;
		foreach($this->dataResult[0] as $key => $val){
			$this->$key = $val;
		}
		return true;
	}
    private function _getSelect($select) {
		if(is_array($select)){
			$allQuery = array_keys($select);
			array_walk($allQuery, function(&$val){
				$val = strtoupper($val);
			});
			
			$querySql = "";
			if(in_array("WHERE", $allQuery)){
				foreach($select as $key => $val){
					if(strtoupper($key) == "WHERE"){
						$querySql .= " WHERE " . $val;					
					}
				}
			}
			
			if(in_array("GROUP", $allQuery)){
				foreach($select as $key => $val){
					if(strtoupper($key) == "GROUP"){
						$querySql .= " GROUP BY " . $val;					
					}
				}
			}
			
			if(in_array("ORDER", $allQuery)){
				foreach($select as $key => $val){
					if(strtoupper($key) == "ORDER"){
						$querySql .= " ORDER BY " . $val;					
					}
				}
			}
			
			if(in_array("LIMIT", $allQuery)){
				foreach($select as $key => $val){
					if(strtoupper($key) == "LIMIT"){
						$querySql .= " LIMIT " . $val;					
					}
				}
			}
			
			return $querySql;
		}		
		return false;
	}
	
	private function _getResult($sql){
		try{
			$db = $this->db;
			$stmt = $db->query($sql);
			$rows = $stmt->fetchAll();
			$this->dataResult = $rows;
		}catch(PDOException $e) {
			echo $e->getMessage();
			exit;
		}
		return $rows;
	}
}
 


