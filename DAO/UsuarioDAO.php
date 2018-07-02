<?php
include_once '../Model/Usuario.php';
require_once '../config.php';
require_once DBAPI;

/**
 * Classe UsuarioDAO 
 * Contem os métodos de persistencia com banco de dados mysql
 */

Class UsuarioDAO{
	/**
	 * @var $pdo
	*/        
	private $pdo;

	public function __construct(){            
            $this->pdo = Database::init();
                    
	}

	public function doLogin(Usuario $usuario){
		try{
			$sql = "SELECT U.* FROM USER U INNER JOIN PASS P  ON P.US_UKEY = U.US_UKEY WHERE U.US_EMAIL = :email AND P.PS_CHAR = md5(:password) LIMIT 0, 1";
			$query = $this->pdo->prepare($sql);

			// VALORES
			$email = $usuario->getEmail("us_email");
			$password = $usuario->getChar("ps_char");

			$query->bindParam("email", $email);
			$query->bindParam("password", $password);
                        $query->execute();
                        $count = $query->rowCount();
			if($count == 1){
                            session_start();
                            $_SESSION["usuario"] = $query->fetch(PDO::FETCH_OBJ);
                            $_SESSION["logado"] = true;
                            return true;
			}

			return false;
		}catch(Exception $e){
			throw new Exception("Ocorreu um erro: " . $e->getMessage(), 1);
		}
		

	}
        public function listAll(){
            try{
                $sql = "SELECT * FROM USER;";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                if($query->rowCount() > 0){
                    $table = $query->fetchAll(PDO::FETCH_ASSOC);
                    return $table;
                }
            } catch (Exception $ex) {

            }
        }
}
