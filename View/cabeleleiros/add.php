
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
<div class="row">
    <h3>Cadastrar Barbeiro/Cabeleleiro</h3>
    <hr>
    <div class="form-row">
        <div class="col-md-6"></div>
        <div class="form-group col-md-6">
            <label for="ca_nome">Nome</label>
            <input type="text" class="form-control" id="ca_nome" placeholder="Nome Cabeleleiro">
            <div class="alert alert-danger" id="ca_error">
                <strong>Alerta!</strong>Nome Obrigatorio
            </div>
        </div>
    </div>
</div>
<div class="row">
    <button type="submit" class="btn btn-primary" id="inserir_ca">Cadastrar</button>
</div>
    
<?php include FOOTER_TEMPLATE ?>