<?php
class Database {
	private static $conn;
	public static function init(){            
		try {
			self::$conn = new PDO(BD_DRIVER.':host='.BD_HOST.';dbname='.BD_DB, BD_USER, BD_PWD);
		}catch(PDOException $e){
			echo $e->getCode().'::'.$e->getMessage();
		}                
		return self::$conn;
	}
}