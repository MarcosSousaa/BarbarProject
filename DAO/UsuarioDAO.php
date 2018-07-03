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
                $table = "";
                if($query->rowCount() > 0){
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $row ){
                        $row['us_data'] = str_replace("-","/", $row['us_data']);
                        $row['us_data'] = date('d/m/Y', strtotime($row['us_data']));
                        $table .="<tr><td style='display:none;'>".$row['us_ukey']."</td><td>".$row['us_nome']."</td><td>".$row['us_email']."</td><td>".$row['us_sexo']."</td><td>".$row['us_data']."</td><td>".$row['us_time']."</td>";
                        $table .= "<td><a class='btn btn-sm btn-sucess us_btn-view'><i class='material-icons center'>visibility</i></a></td>";                   
                        $table .= "<td><a class='btn btn-sm btn-warning us_btn-edit'><i class='material-icons center'>edit</i></a></td>";
                        $table .= "<td><a class='btn btn-sm btn-danger us_btn-del'><i class='material-icons center'>delete</i></a></td></tr>";
                    }
                    return $table;
                }
            } catch (Exception $ex) {
                    echo 'ERROR'.$ex->getMessage();
            }
        }
}
