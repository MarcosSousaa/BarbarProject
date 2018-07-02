<?php include '../../config.php' ?>
<?php
	session_start();            
	if (!isset($_SESSION['logado'])){
		header('Location:'. BASEURL.'View/auth/login.php');	
	}
        if(isset($_GET['action']) && $_GET['action'] == 'logout'){
            session_destroy();
            session_unset();
            header("Location:".BASEURL."View/auth/login.php");
        }
?>
<?php include HEADER_TEMPLATE; ?>            
<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Usuarios</h2>
        </div>
        <div class="col-sm-6 text-right h2">
            <a class="btn btn-primary" href="#"><i class="material-icons">calendar_today</i>Novo Usuario</a>
            <a class="btn btn-primary" href="#"><i class="material-icons">calendar_today</i>Atualizar</a>
        </div>
    </div>
</header>
<table class="table table-hover" id="table-user">
    <thead>
        <tr>
            <th style="">UKEY</th>
            <th style="">NOME</th>
            <th style="">EMAIL</th>
            <th style="">DATA</th>
            <th style="">TIME</th>            
        </tr>
    </thead>
</table>