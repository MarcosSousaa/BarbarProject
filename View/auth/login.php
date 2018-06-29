<?php include '../../config.php'; ?>
<?php 
	session_start();
	if (isset($_SESSION['logado'])){
            header('Location:'. BASEURL.'View/index.php');            
        }
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="<?php echo BASEURL;?>View/assets/css/login.css">
	
	<meta charset="UTF-8">
	<title></title>
</head>
<body>    
    <div class="container">				
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                    <h3 class="panel-title">Faça Login no Sistema</h3>
                                    </div>
                                    <div class="panel-body">				    	
                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="E-mail" id="email" name="email" type="text">
                                                <div class="alert alert-danger" id="email_error1">
                                                            <strong>Alerta!</strong> E-mail em branco
                                                            </div>
                                                <div class="alert alert-danger" id="email_error2">
                                                            <strong>Alerta!</strong> Por favor, informe um email válido.
                                                            </div>
                                            </div>

                                            <div class="form-group">
                                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                                                    <div class="alert alert-danger" id="pass_error1">
                                                            <strong>Alerta!</strong> Não é permitida senha em branco
                                                    </div>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                                    <input name="remember" type="checkbox" value="Remember Me"> Lembrar-me
                                            </label>
                                        </div>
                                        <button id="autenticar" class="btn btn-lg btn-success btn-block" type="submit" name="action"> 
                                            Acessar
                                        </button>				    		
                                    </fieldset>				      	
                                </div>
                            </div>
                    </div>
            </div>
    </div>
    <script type="text/javascript" src="<?php echo BASEURL;?>View/assets/js/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="<?php echo BASEURL;?>View/assets/js/login.js"></script>
</body>
</html>