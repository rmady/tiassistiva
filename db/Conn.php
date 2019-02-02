<?php
class Conn {
	
	public static function conectar(){
		$conn = new mysqli('localhost', 'root', '', 'tiassistiva');
		return $conn;
	}
}
?>