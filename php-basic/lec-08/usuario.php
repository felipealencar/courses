<?php
class Usuario{
	public $nome;
	protected $cpf;
	private $endereco;
	
	function __construct(){
		$this->preparaUsuario();
	}
	
	function preparaUsuario(){
		$this->nome = "Janio";
		$this->cpf = "123456";
		$this->endereco = "Rua X";
	}
	
	function getCpf(){
		return $this->cpf;
	}
	
	function getEndereco(){
		return $this->endereco;
	}
}
?>