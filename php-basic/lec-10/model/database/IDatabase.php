<?php

interface IDatabase{
	public function connect();
	public function insert($data);
	public function update($data, $where);
	public function select($columns='*', array $filters=null);
	public function delete($where);
	public function close();
	public function setTableName($name);
}
?>