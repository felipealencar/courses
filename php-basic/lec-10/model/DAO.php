<?php
class DAO implements IDatabase{
	protected $adapter;
	 
	public function __construct(IDatabase $object){
		$this->adapter = $object;
		$this->connect();
	}
	 
    public function select($columns='*', array $filters=null){
        return $this->adapter->select($columns, $filters);
    }

	public function setTableName($name){
		$this->adapter->setTableName($name);
	}
	 
	public function connect(){
		$this->adapter->connect();
	}
	 
	public function insert($data){
		$this->adapter->insert($data);
	}
	 
	public function update($data, $where){
		$this->adapter->update($data, $where);
	}
	 
	public function delete($where){
		$this->adapter->delete($where);
	}
	 
	public function close(){
		$this->adapter->close();
	}
}