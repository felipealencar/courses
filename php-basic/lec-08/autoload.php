<?php
	function autoLoad($class){
		require_once(__DIR__."/".$class.".php");
	}
	
	spl_autoload_register("autoLoad");
?>